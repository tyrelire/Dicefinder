<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DiscordController extends AbstractController
{
    #[Route('/connect/discord', name: 'connect_discord_start')]
    public function connect(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient('discord')->redirect(
            ['identify', 'email', 'guilds', 'connections', 'guilds.join'],
            []
        );
    }

    #[Route('/connect/discord/check', name: 'connect_discord_check')]
    public function connectCheck(
        Request $request, 
        ClientRegistry $clientRegistry, 
        EntityManagerInterface $entityManager,
        TokenStorageInterface $tokenStorage
    ): Response {
        $client = $clientRegistry->getClient('discord');

        try {
            $discordUser = $client->fetchUser();

            $discordId = $discordUser->getId();
            $email = $discordUser->getEmail();
            $username = $discordUser->getUsername();

            $user = $entityManager->getRepository(User::class)->findOneBy(['discordId' => $discordId]);

            if ($user) {
                $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
                $this->container->get('security.token_storage')->setToken($token);
                return $this->redirectToRoute('app_home');
            } else {
                $existingUser = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
                if ($existingUser) {
                    $username = $username . '_' . uniqid();
                }

                $session = $request->getSession();
                $session->set('discord_user', [
                    'discordId' => $discordId,
                    'email' => $email,
                    'username' => $username,
                ]);

                return $this->redirectToRoute('define_password');
            }

        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la connexion avec Discord: ' . $e->getMessage());
            return $this->redirectToRoute('app_login');
        }
    }

    #[Route('/define-password', name: 'define_password')]
    public function definePassword(Request $request, EntityManagerInterface $entityManager): Response
    {
        $session = $request->getSession();
        $discordUser = $session->get('discord_user');

        if (!$discordUser) {
            return $this->redirectToRoute('app_login');
        }

        $existingUser = $entityManager->getRepository(User::class)->findOneBy(['discordId' => $discordUser['discordId']]);
        if ($existingUser) {
            $token = new UsernamePasswordToken($existingUser, 'main', $existingUser->getRoles());
            $this->container->get('security.token_storage')->setToken($token);
            return $this->redirectToRoute('app_home');
        }

        $form = $this->createFormBuilder()
            ->add('password', PasswordType::class, [
                'label' => 'Définir votre mot de passe',
                'attr' => ['class' => 'mt-1 px-4 py-2 w-full border rounded-md focus:ring focus:outline-none'],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Définir le mot de passe',
                'attr' => ['class' => 'mt-4 px-6 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-indigo-700'],
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $encodedPassword = password_hash($data['password'], PASSWORD_BCRYPT);

            $user = new User();
            $user->setDiscordId($discordUser['discordId']);
            $user->setEmail($discordUser['email']);
            $user->setUsername($discordUser['username']);
            $user->setRoles(['ROLE_MJ', 'ROLE_JOUEUR']);
            $user->setPassword($encodedPassword);
            $user->setVerified(true);
            $ipAddress = $request->getClientIp() ?: '127.0.0.1';
            $user->setIpAddress($ipAddress);

            $entityManager->persist($user);
            $entityManager->flush();

            $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
            $this->container->get('security.token_storage')->setToken($token);
            $session->remove('discord_user');

            $this->addFlash('success', 'Mot de passe défini avec succès !');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('auth_tier/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

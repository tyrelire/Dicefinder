<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $username = strtolower($form->get('username')->getData());
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
    
            if ($existingUser) {
                $form->get('username')->addError(new FormError('Ce nom d’utilisateur est déjà pris.'));
            } else {
                $user->setUsername($username);
                $user->setRoles(['ROLE_MJ', 'ROLE_JOUEUR']);
    
                $birthdate = $request->request->get('birthdate');
                if ($birthdate) {
                    try {
                        $user->setBirthDate(new \DateTime($birthdate));
                    } catch (\Exception $e) {
                        $form->addError(new FormError("La date de naissance est invalide."));
                    }
                }
                $ipAddress = $request->getClientIp();
                $user->setIpAddress($ipAddress);
    
                $plainPassword = $form->get('password')->getData();
                $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
    
                $entityManager->persist($user);
                $entityManager->flush();
    
                $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                    (new TemplatedEmail())
                        ->from(new Address('bot@dicefinder.com', 'DiceFinder Bot'))
                        ->to($user->getEmail())
                        ->subject('Veuillez confirmer votre email')
                        ->htmlTemplate('registration/confirmation_email.html.twig')
                );
    
                $this->addFlash('emailsent', 'Pour finaliser votre inscription, veuillez cliquer sur le lien inclus dans l\'e-mail que nous vous avons envoyé. Cela activera votre compte.');
            }
        }
    
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository): Response
    {
        $id = $request->query->get('id');
        $user = $userRepository->find($id);

        if (null === $id || null === $user) {
            $this->addFlash('erreurMiss', 'Une erreur est survenu pendant la vérification de votre email. Veuillez réessayer plus tard.');
            return $this->redirectToRoute('app_register');
        }
        // $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse email a bien été verifiée, vous pouvez maintenant vous connecter.');

        return $this->redirectToRoute('app_login');
    }
}

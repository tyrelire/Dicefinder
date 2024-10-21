<?php

namespace App\Controller;

use App\Form\UserType;
use App\Form\PasswordChangeSettingsType;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\SocialMediaAndCompetenceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SettingsAccountController extends AbstractController
{
    #[Route('/settings/account', name: 'app_settings_account')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $passwordForm = $this->createForm(PasswordChangeSettingsType::class);
        $passwordForm->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleFormSubmission($entityManager, $user, 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_settings_account');
        }

        if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
            $this->handlePasswordChange($passwordForm, $passwordHasher, $entityManager, $user);
            return $this->redirectToRoute('app_settings_account');
        }

        return $this->render('settings_account/index.html.twig', [
            'form' => $form->createView(),
            'passwordForm' => $passwordForm->createView(),
        ]);
    }
}

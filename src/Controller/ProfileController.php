<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\GroupeJDR;
use App\Entity\PlayerMembership;
use App\Form\PasswordChangeType;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\SocialMediaAndCompetenceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile/{id<\d+>}', name: 'app_profile_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $ownedJDRs = $entityManager->getRepository(GroupeJDR::class)
            ->findBy(['owner' => $user]);
    
        $playerMemberships = $entityManager->getRepository(PlayerMembership::class)
            ->findBy(['player' => $user]);
    
        $joinedJDRs = [];
        foreach ($playerMemberships as $membership) {
            $joinedJDRs[] = [
                'groupe' => $membership->getGroupeJDR(),
                'joined_at' => $membership->getJoinedAt(),
            ];
        }
    
        $favoriteJDRs = $user->getFavoriteGroupeJDR();
    
        $ownedJDRCount = count($ownedJDRs);
        $joinedJDRCount = count($joinedJDRs);
        $favoriteJDRCount = count($favoriteJDRs);
    
        return $this->render('profile/show.html.twig', [
            'user' => $user,
            'ownedJDRs' => $ownedJDRs,
            'joinedJDRs' => $joinedJDRs,
            'favoriteJDRs' => $favoriteJDRs,
            'ownedJDRCount' => $ownedJDRCount,
            'joinedJDRCount' => $joinedJDRCount,
            'favoriteJDRCount' => $favoriteJDRCount,
        ]);
    }

    #[Route('/profile/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
    
        $passwordForm = $this->createForm(PasswordChangeType::class);
        $passwordForm->handleRequest($request);
    
        $avatarForm = $this->createFormBuilder(null, ['block_prefix' => 'avatarForm'])
            ->add('avatar', FileType::class, [
                'label' => false,
                'mapped' => false,
                'required' => false,
            ])
            ->getForm();
        $avatarForm->handleRequest($request);
    
        $socialMediaAndCompetenceForm = $this->createForm(SocialMediaAndCompetenceType::class, $user);
        $socialMediaAndCompetenceForm->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleFormSubmission($entityManager, $user, 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_profile_edit');
        }
    
        if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
            $this->handlePasswordChange($passwordForm, $passwordHasher, $entityManager, $user);
            return $this->redirectToRoute('app_profile_edit');
        }
    
        if ($avatarForm->isSubmitted() && $avatarForm->isValid()) {
            $this->handleAvatarUpload($avatarForm, $request, $slugger, $entityManager, $user);
            return $this->redirectToRoute('app_profile_edit');
        }
    
        if ($socialMediaAndCompetenceForm->isSubmitted() && $socialMediaAndCompetenceForm->isValid()) {
            $this->handleFormSubmission($entityManager, $user, 'Votre profil a été mis à jour avec succès.');
            return $this->redirectToRoute('app_profile_edit');
        }
    
        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
            'passwordForm' => $passwordForm->createView(),
            'avatarForm' => $avatarForm->createView(),
            'socialMediaAndCompetenceForm' => $socialMediaAndCompetenceForm->createView(),
        ]);
    }    

    private function handleFormSubmission(EntityManagerInterface $entityManager, $user, string $message): void
    {
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', $message);
    }

    private function handlePasswordChange($passwordForm, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, $user): void
    {
        $data = $passwordForm->getData();
        
        if ($passwordHasher->isPasswordValid($user, $data['current_password'])) {
            if ($data['new_password'] === $data['confirm_password']) {
                $user->setPassword($passwordHasher->hashPassword($user, $data['new_password']));
                $this->handleFormSubmission($entityManager, $user, 'Mot de passe mis à jour avec succès.');
            } else {
                $this->addFlash('error', 'Les nouveaux mots de passe ne correspondent pas.');
            }
        } else {
            $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
        }
    }

    private function handleAvatarUpload($avatarForm, Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager, $user): void
    {
        if ($request->request->get('delete_avatar')) {
            $this->deleteAvatar($user, $entityManager);
        } else {
            /** @var UploadedFile $avatarFile */
            $avatarFile = $avatarForm->get('avatar')->getData();
            if ($avatarFile) {
                $this->deleteAvatar($user, $entityManager);
                $this->uploadAvatar($avatarFile, $slugger, $user, $entityManager);
            }
        }
    }

    private function deleteAvatar($user, EntityManagerInterface $entityManager): void
    {
        $oldAvatarFilename = $user->getAvatar();
        if ($oldAvatarFilename) {
            $oldAvatarPath = $this->getParameter('kernel.project_dir').'/public/uploads/avatars/'.$oldAvatarFilename;
            if (file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }
            $user->setAvatar(null);
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Photo de profil supprimée avec succès.');
        }
    }

    private function uploadAvatar(UploadedFile $avatarFile, SluggerInterface $slugger, $user, EntityManagerInterface $entityManager): void
    {
        $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$avatarFile->guessExtension();

        try {
            $avatarFile->move(
                $this->getParameter('kernel.project_dir').'/public/uploads/avatars',
                $newFilename
            );
            $user->setAvatar($newFilename);
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Photo de profil mise à jour avec succès.');
        } catch (FileException $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de la photo.');
        }
    }
}

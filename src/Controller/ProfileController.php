<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\GroupeJDR;
use App\Entity\PlayerMembership;
use App\Form\PasswordChangeType;
use App\Form\PasswordChangeSettingsType;
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
            $groupeJDR = $membership->getGroupeJDR();
            $joinedJDRs[] = [
                'id' => $groupeJDR->getId(),
                'groupe' => $groupeJDR,
                'joined_at' => $membership->getJoinedAt(),
                'picture' => $groupeJDR->getPicture(),
                'title' => $groupeJDR->getTitle(),
                'players' => $groupeJDR->getPlayers(),
                'maxPlayer' => $groupeJDR->getMaxPlayer(),
                'status' => $groupeJDR->getStatus(),
                'owner' => $groupeJDR->getOwner(),
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

    #[Route('/profile/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        if ($request->isMethod('POST')) {
            if ($request->files->get('avatar')) {
                $this->handleAvatarUpload($request->files->get('avatar'), $slugger, $user, $entityManager);
            }

            if ($request->files->get('banner')) {
                $this->handleBannerUpload($request->files->get('banner'), $slugger, $user, $entityManager);
            }

            return $this->redirectToRoute('app_profile_edit');
        }

        $ownedJDRs = $entityManager->getRepository(GroupeJDR::class)
            ->findBy(['owner' => $user]);

        $playerMemberships = $entityManager->getRepository(PlayerMembership::class)
            ->findBy(['player' => $user]);

        $joinedJDRs = [];
        foreach ($playerMemberships as $membership) {
            $groupeJDR = $membership->getGroupeJDR();
            $joinedJDRs[] = [
                'id' => $groupeJDR->getId(),
                'groupe' => $groupeJDR,
                'joined_at' => $membership->getJoinedAt(),
                'picture' => $groupeJDR->getPicture(),
                'title' => $groupeJDR->getTitle(),
                'players' => $groupeJDR->getPlayers(),
                'maxPlayer' => $groupeJDR->getMaxPlayer(),
                'status' => $groupeJDR->getStatus(),
                'owner' => $groupeJDR->getOwner(),
            ];
        }

        $favoriteJDRs = $user->getFavoriteGroupeJDR();

        $ownedJDRCount = count($ownedJDRs);
        $joinedJDRCount = count($joinedJDRs);
        $favoriteJDRCount = count($favoriteJDRs);

        return $this->render('profile/edit.html.twig', [
            'user' => $user,
            'ownedJDRs' => $ownedJDRs,
            'joinedJDRs' => $joinedJDRs,
            'favoriteJDRs' => $favoriteJDRs,
            'ownedJDRCount' => $ownedJDRCount,
            'joinedJDRCount' => $joinedJDRCount,
            'favoriteJDRCount' => $favoriteJDRCount,
        ]);
    }

    #[Route('/profile/edit/avatar', name: 'app_profile_edit_avatar', methods: ['POST'])]
    public function editAvatar(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        /** @var UploadedFile $avatarFile */
        $avatarFile = $request->files->get('avatar');
        if ($avatarFile) {
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

        return $this->redirectToRoute('app_profile_edit');
    }

    #[Route('/profile/edit/banner', name: 'app_profile_edit_banner', methods: ['POST'])]
    public function editBanner(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        /** @var UploadedFile $bannerFile */
        $bannerFile = $request->files->get('banner');
        if ($bannerFile) {
            $originalFilename = pathinfo($bannerFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$bannerFile->guessExtension();
    
            try {
                $bannerFile->move(
                    $this->getParameter('kernel.project_dir').'/public/uploads/banners',
                    $newFilename
                );
                $user->setBanner($newFilename);
                $entityManager->persist($user);
                $entityManager->flush();
    
                $this->addFlash('success', 'Bannière mise à jour avec succès.');
            } catch (FileException $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de la bannière.');
            }
        }
    
        return $this->redirectToRoute('app_profile_edit');
    }

    #[Route('/profile/edit/bio', name: 'app_profile_edit_bio', methods: ['POST'])]
    public function editBio(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $bio = $request->request->get('bio');
        $user->setBio($bio !== null ? $bio : '');
        $entityManager->persist($user);
        $entityManager->flush();
    
        $this->addFlash('success', 'Biographie mise à jour avec succès.');
    
        return $this->redirectToRoute('app_profile_edit');
    }
    

    #[Route('/profile/edit/gender', name: 'app_profile_edit_gender', methods: ['POST'])]
    public function editGender(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $gender = $request->request->get('gender');
        if ($gender) {
            $user->setGender($gender);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Genre mis à jour avec succès.');
        }

        return $this->redirectToRoute('app_profile_edit');
    }

    #[Route('/profile/edit/birthdate', name: 'app_profile_edit_birthdate', methods: ['POST'])]
    public function editBirthdate(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $birthdate = $request->request->get('birthdate');
        if ($birthdate) {
            $user->setBirthdate(new \DateTime($birthdate));
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Date de naissance mise à jour avec succès.');
        }

        return $this->redirectToRoute('app_profile_edit');
    }
}

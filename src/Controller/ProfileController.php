<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\GroupeJDR;
use App\Entity\Friendship;
use App\Entity\Availability;
use App\Entity\PlayerMembership;
use App\Form\PasswordChangeType;
use App\Repository\UserRepository;
use App\Service\FileUploaderService;
use App\Form\PasswordChangeSettingsType;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\SocialMediaAndCompetenceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ProfileController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ParameterBagInterface $params;

    public function __construct(EntityManagerInterface $entityManager, ParameterBagInterface $params)
    {
        $this->entityManager = $entityManager;
        $this->params = $params;
    }

    #[Route('/profile/{id<\d+>}', name: 'app_profile_show', methods: ['GET'])]
    public function show(
        int $id,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        FriendshipRepository $friendshipRepository
    ): Response {
        $currentUser = $this->getUser();
        $user = $entityManager->getRepository(User::class)->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
        $ownedJDRs = $entityManager->getRepository(GroupeJDR::class)->findBy(['owner' => $user]);
        $playerMemberships = $entityManager->getRepository(PlayerMembership::class)->findBy(['player' => $user]);
        $joinedJDRs = array_map(fn($membership) => [
            'id' => $membership->getGroupeJDR()->getId(),
            'groupe' => $membership->getGroupeJDR(),
            'joined_at' => $membership->getJoinedAt(),
            'time_since_joined' => $this->formatInterval((new \DateTime())->diff($membership->getJoinedAt())),
            'picture' => $membership->getGroupeJDR()->getPicture(),
            'title' => $membership->getGroupeJDR()->getTitle(),
            'players' => $membership->getGroupeJDR()->getPlayers(),
            'maxPlayer' => $membership->getGroupeJDR()->getMaxPlayer(),
            'status' => $membership->getGroupeJDR()->getStatus(),
            'owner' => $membership->getGroupeJDR()->getOwner(),
        ], $playerMemberships);
        $availabilities = $entityManager->getRepository(Availability::class)->findBy(['user' => $user]);
        $favoriteJDRs = $user->getFavoriteGroupeJDR();
        $ownedJDRCount = count($ownedJDRs);
        $joinedJDRCount = count($joinedJDRs);
        $favoriteJDRCount = count($favoriteJDRs);
        $friends = $userRepository->findFriendsOfUser($user);
        $relationshipStatus = null;
        if ($currentUser && $currentUser->getId() !== $user->getId()) {
            $relationship = $friendshipRepository->findFriendship($currentUser, $user);
            $relationshipStatus = $relationship ? $relationship->getStatus() : 'no_relationship';
        }
        $stripePublicKey = $this->getParameter('env(STRIPE_PUBLIC_KEY)');
        return $this->render('profile/show.html.twig', [
            'user' => $user,
            'ownedJDRs' => $ownedJDRs,
            'joinedJDRs' => $joinedJDRs,
            'favoriteJDRs' => $favoriteJDRs,
            'ownedJDRCount' => $ownedJDRCount,
            'joinedJDRCount' => $joinedJDRCount,
            'favoriteJDRCount' => $favoriteJDRCount,
            'relationshipStatus' => $relationshipStatus,
            'friends' => $friends,
            'stripePublicKey' => $stripePublicKey,
            'availabilities' => $availabilities,
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
    public function editAvatar(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager, FileUploaderService $fileUploaderService): Response
    {
        $user = $this->getUser();
        $targetDirectory = $this->getParameter('avatars_directory');

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        /** @var UploadedFile $avatarFile */
        $avatarFile = $request->files->get('avatar');
        if ($avatarFile) {
            if (in_array($avatarFile->getMimeType(), ['image/gif', 'image/webp'])) {
                $this->addFlash('error', 'Seuls les formats PNG et JPG sont autorisés pour la photo de profil.');
                return $this->redirectToRoute('app_profile_edit');
            }

            $oldAvatar = $user->getAvatar();
            if ($oldAvatar) {
                $fileUploaderService->removeFile($oldAvatar, $targetDirectory);
            }

            try {
                $newFilename = $fileUploaderService->upload($avatarFile, $slugger, $targetDirectory);
                $user->setAvatar($newFilename);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Photo de profil mise à jour avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de la photo.');
            }
        }

        return $this->redirectToRoute('app_profile_edit');
    }

    #[Route('/profile/edit/banner', name: 'app_profile_edit_banner', methods: ['POST'])]
    public function editBanner(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager, FileUploaderService $fileUploaderService): Response
    {
        $user = $this->getUser();
        $targetDirectory = $this->getParameter('banners_directory');

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        /** @var UploadedFile $bannerFile */
        $bannerFile = $request->files->get('banner');
        if ($bannerFile) {
            if (in_array($bannerFile->getMimeType(), ['image/gif', 'image/webp'])) {
                $this->addFlash('error', 'Seuls les formats PNG et JPG sont autorisés pour la bannière.');
                return $this->redirectToRoute('app_profile_edit');
            }

            $oldBanner = $user->getBanner();
            if ($oldBanner) {
                $fileUploaderService->removeFile($oldBanner, $targetDirectory);
            }

            try {
                $newFilename = $fileUploaderService->upload($bannerFile, $slugger, $targetDirectory);
                $user->setBanner($newFilename);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Bannière mise à jour avec succès.');
            } catch (\Exception $e) {
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

    private function formatInterval(\DateInterval $interval): string
    {
        if ($interval->y > 0) {
            return $interval->y . ' an' . ($interval->y > 1 ? 's' : '');
        } elseif ($interval->m > 0) {
            return $interval->m . ' mois';
        } elseif ($interval->d > 0) {
            return $interval->d . ' jour' . ($interval->d > 1 ? 's' : '');
        } elseif ($interval->h > 0) {
            return $interval->h . ' heure' . ($interval->h > 1 ? 's' : '');
        } elseif ($interval->i > 0) {
            return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '');
        } else {
            return 'moins d\'une minute';
        }
    }
}

<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use App\Form\GroupeJDRType;
use App\Entity\Notification;
use App\Entity\PlayerMembership;
use App\Repository\UserRepository;
use App\Entity\NotificationHistory;
use App\Service\NotificationService;
use App\Repository\CategoryRepository;
use App\Repository\GroupeJDRRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PlayerMembershipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/groupe/jdr')]
final class GroupeJDRController extends AbstractController
{
    // #[Route('/', name: 'app_groupe_j_d_r_index', methods: ['GET'])]
    // public function index(Request $request, GroupeJDRRepository $groupeJDRRepository, CategoryRepository $categoryRepository): Response
    // {
    //     $searchTerm = $request->query->get('search', '');
    //     $selectedCategories = $request->query->all('category');
        
    //     $sort = $request->query->get('sort');
    //     if (empty($sort) || $sort === 'undefined') {
    //         $sort = 'newest';
    //     }
        
    //     $recruitment = $request->query->getBoolean('recruitment', false);

    //     if (!in_array($sort, ['newest', 'oldest'])) {
    //         $sort = 'newest';
    //     }

    //     $categories = $categoryRepository->findAll();

    //     $queryBuilder = $groupeJDRRepository->createQueryBuilder('g')
    //         ->leftJoin('g.owner', 'o');

    //     if ($searchTerm) {
    //         $queryBuilder
    //             ->andWhere('g.title LIKE :searchTerm OR o.username LIKE :searchTerm')
    //             ->setParameter('searchTerm', '%' . $searchTerm . '%');
    //     }

    //     if (!empty($selectedCategories)) {
    //         foreach ($selectedCategories as $key => $categoryId) {
    //             $queryBuilder
    //                 ->andWhere(':categoryId' . $key . ' MEMBER OF g.categories')
    //                 ->setParameter('categoryId' . $key, $categoryId);
    //         }
    //     }

    //     if ($sort === 'newest') {
    //         $queryBuilder->orderBy('g.created_at', 'DESC');
    //     } else {
    //         $queryBuilder->orderBy('g.created_at', 'ASC');
    //     }

    //     if ($recruitment) {
    //         $queryBuilder->andWhere('g.recrutement = true');
    //     }

    //     $groupeJDRs = $queryBuilder->getQuery()->getResult();

    //     return $this->render('groupe_jdr/index.html.twig', [
    //         'groupe_j_d_rs' => $groupeJDRs,
    //         'searchTerm' => $searchTerm,
    //         'selectedCategories' => $selectedCategories,
    //         'sort' => $sort,
    //         'recruitment' => $recruitment,
    //         'categories' => $categories,
    //     ]);
    // }

    #[Route('/', name: 'app_groupe_j_d_r_index', methods: ['GET'])]
    public function index(Request $request, GroupeJDRRepository $groupeJDRRepository, CategoryRepository $categoryRepository): Response
    {
        $searchTerm = $request->query->get('search', '');
        $selectedCategories = $request->query->all('category');
        $sort = $request->query->get('sort', 'newest');
        $recruitment = $request->query->getBoolean('recruitment', false);
    
        if (empty($sort) || $sort === 'undefined') {
            $sort = 'newest';
        }
    
        $categories = $categoryRepository->findAll();
    
        $queryBuilder = $groupeJDRRepository->createQueryBuilder('g')
            ->leftJoin('g.owner', 'o')
            ->where('g.isArchived = false');
    
        if ($searchTerm) {
            $queryBuilder
                ->andWhere('g.title LIKE :searchTerm OR o.username LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
    
        if (!empty($selectedCategories)) {
            foreach ($selectedCategories as $key => $categoryId) {
                $queryBuilder
                    ->andWhere(':categoryId' . $key . ' MEMBER OF g.categories')
                    ->setParameter('categoryId' . $key, $categoryId);
            }
        }
    
        if ($sort === 'newest') {
            $queryBuilder->orderBy('g.created_at', 'DESC');
        } else {
            $queryBuilder->orderBy('g.created_at', 'ASC');
        }
    
        if ($recruitment) {
            $queryBuilder->andWhere('g.recrutement = true');
        }
    
        $groupeJDRs = $queryBuilder->getQuery()->getResult();
    
        return $this->render('groupe_jdr/index.html.twig', [
            'groupe_j_d_rs' => $groupeJDRs,
            'searchTerm' => $searchTerm,
            'selectedCategories' => $selectedCategories,
            'sort' => $sort,
            'recruitment' => $recruitment,
            'categories' => $categories,
        ]);
    }


    #[Route('/new', name: 'app_groupe_j_d_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!$this->getUser()) {
            $this->addFlash('error', 'Vous devez vous connecter pour créer un Univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }
        $groupeJDR = new GroupeJDR();
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if ($file) {
                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            } else {
                $this->addFlash('error', 'L\'image est obligatoire pour créer un groupe de Univers.');
                return $this->render('groupe_jdr/new.html.twig', [
                    'groupe_j_d_r' => $groupeJDR,
                    'form' => $form,
                    'isNew' => true,
                ]);
            }

            $groupeJDR->setOwner($this->getUser());
            $now = new \DateTime();
            $groupeJDR->setCreatedAt($now);
            $groupeJDR->setEditAt($now);

            foreach ($groupeJDR->getEvents() as $event) {
                $event->setGroupeJDR($groupeJDR);
            }

            $entityManager->persist($groupeJDR);
            $entityManager->flush();

            $this->addFlash('success', 'L\'Univers a été créé avec succès.');
            return $this->redirectToRoute('app_groupe_j_d_r_edit', ['id' => $groupeJDR->getId()]);
        }

        return $this->render('groupe_jdr/new.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
            'isNew' => true,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_show', methods: ['GET'])]
    public function show(GroupeJDR $groupeJDR, GroupeJDRRepository $groupeJDRRepository, InvitationRepository $invitationRepository): Response
    {
        $recruitingJDRs = $groupeJDRRepository->findBy([
            'recrutement' => true,
            'isArchived' => false,
        ]);
    
        $invitations = $invitationRepository->findBy(['groupeJDR' => $groupeJDR]);
    
        $currentUser = $this->getUser();
        $requestInProgress = false;
        $isOwner = false;
        $isMember = false;
        $favorites = null;
    
        if ($currentUser) {
            if ($groupeJDR->getOwner() === $currentUser) {
                $isOwner = true;
            }
    
            if ($groupeJDR->getPlayers()->contains($currentUser)) {
                $isMember = true;
            }
    
            $invitation = $invitationRepository->findOneBy([
                'requestedBy' => $currentUser,
                'groupeJDR' => $groupeJDR,
                'status' => 'pending'
            ]);
    
            if ($invitation) {
                $requestInProgress = true;
            }
    
            $favorites = $currentUser->getFavoriteGroupeJDR();
        }
    
        $isClosed = in_array($groupeJDR->getStatus(), ['complet', 'termine', 'annule']);
    
        return $this->render('groupe_jdr/show.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'recruiting_jdrs' => $recruitingJDRs,
            'invitations' => $invitations,
            'request_in_progress' => $requestInProgress,
            'is_owner' => $isOwner,
            'is_member' => $isMember,
            'is_closed' => $isClosed,
            'favoriteJdrs' => $favorites,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_groupe_j_d_r_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        GroupeJDR $groupeJDR,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        InvitationRepository $invitationRepository,
        SluggerInterface $slugger,
        NotificationService $notificationService
    ): Response {
            if ($groupeJDR->getOwner() !== $this->getUser()) {
                $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette Univers.');
                return $this->redirectToRoute('app_groupe_j_d_r_index');
            }
        
            $form = $this->createForm(GroupeJDRType::class, $groupeJDR, ['is_edit' => true]);
            $form->handleRequest($request);
        
            $addedPlayers = $request->request->get('added_players');
            if ($addedPlayers) {
                $playerIds = json_decode($addedPlayers, true);
                foreach ($playerIds as $userId) {
                    $user = $userRepository->find($userId);
                    if ($user && !$invitationRepository->findOneBy(['groupeJDR' => $groupeJDR, 'user' => $user])) {
                        $invitation = new Invitation();
                        $invitation->setUser($user);
                        $invitation->setGroupeJDR($groupeJDR);
                        $invitation->setStatus('pending');
                        $invitation->setInitiatedBy('owner');
                        $invitation->setRequestedBy($this->getUser());
                        $entityManager->persist($invitation);

                        $notificationService->createNotification(
                            $this->getUser(),
                            'invitation_sent',
                            'Vous avez invité ' . $user->getUsername() . ' à rejoindre l\'univers : ' . $groupeJDR->getTitle() . '.',
                            $groupeJDR
                        );
                    }
                }
            }
        
            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form->get('picture')->getData();
                if ($file) {
                    $newFilename = $this->uploadImage($file, $slugger);
                    $groupeJDR->setPicture($newFilename);
                }
        
                $groupeJDR->setEditAt(new \DateTime());
        
                foreach ($groupeJDR->getEvents() as $event) {
                    if (!$event->getGroupeJDR()) {
                        $event->setGroupeJDR($groupeJDR);
                    }
                }
        
                $entityManager->flush();
                $this->addFlash('success', 'L\'Univers a été mis à jour avec succès.');
        
                return $this->redirectToRoute('app_my_jdr', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('groupe_jdr/edit.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
            'isNew' => false,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_delete', methods: ['POST'])]
    public function delete(Request $request, GroupeJDR $groupeJDR, EntityManagerInterface $entityManager, NotificationService $notificationService): Response
    {
        if ($this->isCsrfTokenValid('delete' . $groupeJDR->getId(), $request->request->get('_token'))) {
            $owner = $groupeJDR->getOwner();
            
            $players = $groupeJDR->getPlayers();
            $notificationService->createNotification(
                $owner,
                'groupe_deleted',
                'Votre univers "' . $groupeJDR->getTitle() . '" a été supprimé.',
                $groupeJDR
            );
            
            foreach ($players as $player) {
                $notificationService->createNotification(
                    $player,
                    'groupe_deleted',
                    'L\'univers "' . $groupeJDR->getTitle() . '" auquel vous faisiez partie a été supprimé.',
                    $groupeJDR
                );
            }
            $groupeJDR->setArchived(true);
            $entityManager->flush();

            $this->addFlash('success', 'L\'univers a été archivé avec succès.');
        }

        return $this->redirectToRoute('app_my_jdr', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/leave', name: 'leave_jdr', methods: ['POST'])]
    public function leave(GroupeJDR $groupeJDR, EntityManagerInterface $entityManager, NotificationService $notificationService): Response
    {
        $user = $this->getUser();
    
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour quitter un univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }
    
        if ($groupeJDR->getPlayers()->contains($user)) {
            $groupeJDR->removePlayer($user);

            $playerMembershipRepository = $entityManager->getRepository(PlayerMembership::class);
            $membership = $playerMembershipRepository->findOneBy([
                'player' => $user,
                'groupeJDR' => $groupeJDR
            ]);

            if ($membership) {
                $entityManager->remove($membership);
            }
    
            $entityManager->persist($groupeJDR);
            $entityManager->flush();

            $notificationService->createNotification(
                $user,
                'leave',
                'Vous avez quitté l\'univers : ' . $groupeJDR->getTitle() . '.',
                $groupeJDR
            );

            $notificationService->createNotification(
                $groupeJDR->getOwner(),
                'player_left',
                'Le joueur ' . $user->getUserIdentifier() . ' a quitté l\'univers : ' . $groupeJDR->getTitle() . '.',
                $groupeJDR
            );

            $this->addFlash('success', 'Vous avez quitté cet univers.');
        } else {
            $this->addFlash('error', 'Vous ne faites pas partie de cet univers.');
        }

        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJDR->getId()]);
    }

    private function uploadImage($file, SluggerInterface $slugger): string
    {
        $maxSize = 2 * 1024 * 1024;
        if ($file->getSize() > $maxSize) {
            throw new \Exception('Le fichier est trop volumineux. La taille maximale autorisée est de 2 Mo.');
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move(
                $this->getParameter('uploads_directory'),
                $newFilename
            );
        } catch (FileException $e) {
        }

        return $newFilename;
    }

    private function deleteImage(string $filename): void
    {
        $filePath = $this->getParameter('uploads_directory') . '/' . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
    
}

<?php

namespace App\Controller;

use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use App\Entity\Notification;
use Psr\Log\LoggerInterface;
use App\Entity\PlayerMembership;
use App\Repository\UserRepository;
use App\Entity\NotificationHistory;
use App\Service\NotificationService;
use App\Repository\GroupeJDRRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PlayerMembershipRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlayerInvitationController extends AbstractController
{
    private LoggerInterface $logger;
    private NotificationService $notificationService;

    public function __construct(LoggerInterface $logger, NotificationService $notificationService)
    {
        $this->logger = $logger;
        $this->notificationService = $notificationService;
    }

    #[Route('/api/check_user/{pseudo}/{jdrId}', name: 'check_user', methods: ['GET'])]
    public function checkUser(
        string $pseudo, 
        int $jdrId, 
        UserRepository $userRepository, 
        GroupeJDRRepository $groupeJdrRepository
    ): JsonResponse {
        $user = $userRepository->findOneBy(['username' => $pseudo]);
        if (!$user) {
            return new JsonResponse(['exists' => false, 'message' => 'Le pseudo n\'existe pas.'], 404);
        }
    
        $groupeJdr = $groupeJdrRepository->find($jdrId);
        if (!$groupeJdr) {
            return new JsonResponse(['exists' => false, 'message' => 'Univers non trouvé.'], 404);
        }

        if ($groupeJdr->getOwner() === $user) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => false,
                'error' => true,
                'message' => 'Un maître de jeu ne peut pas être joueur dans son propre Univers.'
            ], 403);
        }

        if ($groupeJdr->getPlayers()->contains($user)) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => true,
                'message' => 'L\'utilisateur est déjà dans l\'Univers.'
            ], 400);
        }

        if (strcasecmp($user->getUsername(), $pseudo) !== 0) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => false, 
                'caseMismatch' => true,
                'message' => 'Le pseudo existe, mais la casse ne correspond pas. Veuillez saisir le pseudo exact.'
            ], 400);
        }
    
        return new JsonResponse([
            'exists' => true, 
            'inGroup' => false, 
            'id' => $user->getId()
        ], 200);
    }

    #[Route('/api/remove_user/{userId}/{jdrId}', name: 'remove_user_from_jdr', methods: ['DELETE'])]
    public function removeUserFromJdr(
        int $userId, 
        int $jdrId, 
        UserRepository $userRepository, 
        GroupeJDRRepository $groupeJdrRepository, 
        EntityManagerInterface $entityManager,
        NotificationService $notificationService
    ): JsonResponse {
        $user = $userRepository->find($userId);
        $groupeJdr = $groupeJdrRepository->find($jdrId);

        if (!$user || !$groupeJdr) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur ou groupe non trouvé'], 404);
        }

        if ($groupeJdr->getPlayers()->contains($user)) {
            $groupeJdr->removePlayer($user);

            $playerMembershipRepository = $entityManager->getRepository(PlayerMembership::class);
            $membership = $playerMembershipRepository->findOneBy([
                'player' => $user,
                'groupeJDR' => $groupeJdr
            ]);
            
            if ($membership) {
                $entityManager->remove($membership);
            }

            $notificationService->createNotification(
                $user,
                'user_removed_from_group',
                'Vous avez été retiré de l\'univers "' . $groupeJdr->getTitle() . '".',
                $groupeJdr
            );

            $notificationService->createNotification(
                $groupeJdr->getOwner(),
                'user_removed_from_group',
                'Vous avez retiré ' . $user->getUsername() . ' de l\'univers "' . $groupeJdr->getTitle() . '".',
                $groupeJdr
            );

            $entityManager->flush();

            return new JsonResponse([
                'success' => true, 
                'redirect' => $this->generateUrl('app_groupe_j_d_r_edit', ['id' => $groupeJdr->getId()])
            ], 200);
        }

        return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé dans ce groupe'], 404);
    }

    #[Route('/api/request_join/{groupeId}', name: 'request_join', methods: ['POST'])]
    public function requestJoin(
        int $groupeId,
        Request $request,
        EntityManagerInterface $entityManager,
        GroupeJDRRepository $groupeJdrRepository,
        InvitationRepository $invitationRepository,
        NotificationService $notificationService
    ): Response {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['error' => 'Vous devez être connecté pour faire cette action.'], Response::HTTP_UNAUTHORIZED);
            }
            $this->addFlash('error', 'Vous devez être connecté pour faire cette action.');
            return $this->redirectToRoute('app_login');
        }
    
        $groupeJdr = $groupeJdrRepository->find($groupeId);
        if (!$groupeJdr) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['error' => 'Univers non trouvé.'], Response::HTTP_NOT_FOUND);
            }
            $this->addFlash('error', 'Univers non trouvé.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }
    
        $pendingInvitation = $invitationRepository->findOneBy([
            'requestedBy' => $currentUser,
            'groupeJDR' => $groupeJdr,
            'status' => 'pending'
        ]);
    
        if ($pendingInvitation) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['error' => 'Vous avez déjà une demande en attente pour cet Univers.'], Response::HTTP_CONFLICT);
            }
            $this->addFlash('error', 'Vous avez déjà une demande en attente pour cet Univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeId]);
        }
    
        if ($groupeJdr->getOwner() === $currentUser) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['error' => 'Vous ne pouvez pas rejoindre votre propre Univers.'], Response::HTTP_BAD_REQUEST);
            }
            $this->addFlash('error', 'Vous ne pouvez pas rejoindre votre propre Univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeId]);
        }
    
        if ($groupeJdr->getPlayers()->contains($currentUser)) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['error' => 'Vous êtes déjà dans ce groupe.'], Response::HTTP_CONFLICT);
            }
            $this->addFlash('error', 'Vous êtes déjà dans ce groupe.');
            return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeId]);
        }
    
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        $invitation = new Invitation();
        $invitation->setUser($groupeJdr->getOwner());
        $invitation->setGroupeJDR($groupeJdr);
        $invitation->setStatus('pending');
        $invitation->setInitiatedBy('user');
        $invitation->setMessage($message);
        $invitation->setRequestedBy($currentUser);

        $notificationService->createNotification(
            $groupeJdr->getOwner(),
            'join_request',
            $currentUser->getUsername() . ' a demandé à rejoindre votre univers ' . $groupeJdr->getTitle() . '.',
            $groupeJdr
        );
        $notificationService->createNotification(
            $currentUser,
            'join_request',
            'Votre demande pour rejoindre ' . $groupeJdr->getTitle() . ' a été envoyée avec succès',
            $groupeJdr
        );

    
        $entityManager->persist($invitation);
        $entityManager->flush();
    
        if ($request->isXmlHttpRequest()) {
            return $this->json(['success' => 'Demande envoyée avec succès.'], Response::HTTP_OK);
        }
    
        $this->addFlash('success', 'Demande envoyée avec succès.');
        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeId]);
    }

    #[Route('/api/remove_invitation/{invitationId}', name: 'remove_invitation', methods: ['DELETE'])]
    public function removeInvitation(
        int $invitationId, 
        InvitationRepository $invitationRepository, 
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $invitation = $invitationRepository->find($invitationId);
        
        if (!$invitation) {
            return new JsonResponse(['success' => false, 'message' => 'Invitation non trouvée'], 404);
        }
    
        try {
            $entityManager->remove($invitation);
            $entityManager->flush();
    
            return new JsonResponse(['success' => true], 200);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Erreur lors de la suppression de l\'invitation'], 500);
        }
    }

    #[Route('/api/respond_invitation_base/{invitationId}', name: 'respond_invitation_base', methods: ['POST'])]
    public function respondInvitationBase(
        int $invitationId,
        Request $request,
        EntityManagerInterface $entityManager,
        PlayerMembershipRepository $playerMembershipRepository,
        NotificationService $notificationService
    ): JsonResponse {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            return new JsonResponse(['success' => false, 'message' => 'Vous devez être connecté pour faire cette action.'], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        $invitation = $entityManager->getRepository(Invitation::class)->find($invitationId);
        if (!$invitation) {
            return new JsonResponse(['success' => false, 'message' => 'Invitation non trouvée.'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        $data = json_decode($request->getContent(), true);
        $response = $data['response'] ?? null;
    
        if (!$this->isAuthorized($currentUser, $invitation)) {
            return new JsonResponse(['success' => false, 'message' => 'Accès non autorisé.'], JsonResponse::HTTP_FORBIDDEN);
        }
    
        $groupeJdr = $invitation->getGroupeJDR();
    
        if ($response === 'accept') {
            $this->handleAcceptResponse($invitation, $groupeJdr, $entityManager, $playerMembershipRepository);
        } elseif ($response === 'refuse') {
            $this->sendNotifications('refuse', $invitation, $groupeJdr, $notificationService);
        } else {
            return new JsonResponse(['success' => false, 'message' => 'Réponse invalide.'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $entityManager->remove($invitation);
        $entityManager->flush();
    
        return new JsonResponse(['success' => true, 'message' => $response === 'accept' ? 'Invitation acceptée.' : 'Invitation refusée.']);
    }
    

    #[Route('/api/respond_invitation/{invitationId}', name: 'respond_invitation', methods: ['POST'])]
    public function respondInvitation(
        int $invitationId,
        Request $request,
        EntityManagerInterface $entityManager,
        PlayerMembershipRepository $playerMembershipRepository,
        NotificationService $notificationService
    ): Response {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            $this->addFlash('error', 'Vous devez être connecté pour faire cette action.');
            return $this->redirectToRoute('app_login');
        }

        $invitation = $entityManager->getRepository(Invitation::class)->find($invitationId);
        if (!$invitation) {
            $this->addFlash('error', 'Invitation non trouvée.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }

        $response = $request->request->get('response');
        $groupeJdr = $invitation->getGroupeJDR();

        if (!$this->isAuthorized($currentUser, $invitation)) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }

        if ($response === 'accept') {
            $this->handleAcceptResponse($invitation, $groupeJdr, $entityManager, $playerMembershipRepository);
        } elseif ($response === 'refuse') {
            $this->addFlash('info', 'Invitation refusée.');
        } else {
            $this->addFlash('danger', 'Réponse invalide.');
            return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJdr->getId()]);
        }

        $this->sendNotifications($response, $invitation, $groupeJdr, $notificationService);

        $entityManager->remove($invitation);
        $entityManager->flush();

        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJdr->getId()]);
    }

    private function isAuthorized($currentUser, Invitation $invitation): bool
    {
        return $invitation->getUser() === $currentUser || $invitation->getInitiatedBy() === 'owner';
    }

    private function handleAcceptResponse(
        Invitation $invitation,
        $groupeJdr,
        EntityManagerInterface $entityManager,
        PlayerMembershipRepository $playerMembershipRepository
    ): void {
        if ($invitation->getInitiatedBy() === 'owner') {
            $player = $invitation->getUser();
        } else {
            $player = $invitation->getRequestedBy();
        }

        if (!$groupeJdr->getPlayers()->contains($player)) {
            $groupeJdr->addPlayer($player);

            $existingMembership = $playerMembershipRepository->findOneBy([
                'player' => $player,
                'groupeJDR' => $groupeJdr,
            ]);

            if (!$existingMembership) {
                $membership = new PlayerMembership();
                $membership->setPlayer($player);
                $membership->setGroupeJDR($groupeJdr);
                $membership->setJoinedAt(new \DateTime());

                $entityManager->persist($membership);
            }

            $this->addFlash('success', 'L\'utilisateur a été ajouté avec succès au groupe.');
        } else {
            $this->addFlash('warning', 'Cet utilisateur est déjà dans le groupe.');
        }

        $entityManager->persist($groupeJdr);
    }

    private function sendNotifications(
        string $response,
        Invitation $invitation,
        $groupeJdr,
        NotificationService $notificationService
    ): void {
        $requestedBy = $invitation->getRequestedBy();
        $user = $invitation->getUser();
        $jdrTitle = $groupeJdr->getTitle();

        $notificationService->createNotification(
            $requestedBy,
            $response === 'accept' ? 'accepted' : 'refused',
            $response === 'accept'
                ? 'Votre demande d\'invitation à l\'univers "' . $jdrTitle . '" a été acceptée.'
                : 'Votre demande d\'invitation à l\'univers "' . $jdrTitle . '" a été refusée.',
            $groupeJdr
        );

        if ($response === 'accept') {
            $notificationService->createNotification(
                $user,
                'acceptance_confirmation',
                'Vous avez accepté la demande de ' . $requestedBy->getUsername() . ' pour rejoindre l\'univers : "' . $jdrTitle . '".',
                $groupeJdr
            );
        } elseif ($response === 'refuse') {
            $notificationService->createNotification(
                $user,
                'refusal_confirmation',
                'Vous avez refusé la demande de ' . $requestedBy->getUsername() . ' pour rejoindre l\'univers : "' . $jdrTitle . '".',
                $groupeJdr
            );
        }
    }
}

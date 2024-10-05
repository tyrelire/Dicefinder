<?php

namespace App\Controller;

use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use Psr\Log\LoggerInterface;
use App\Repository\UserRepository;
use App\Entity\NotificationHistory;
use App\Repository\GroupeJDRRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlayerInvitationController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
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
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $user = $userRepository->find($userId);
        $groupeJdr = $groupeJdrRepository->find($jdrId);
    
        if (!$user || !$groupeJdr) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur ou groupe non trouvé'], 404);
        }
    
        if ($groupeJdr->getPlayers()->contains($user)) {
            $groupeJdr->removePlayer($user);
            $entityManager->flush();
    
            return new JsonResponse([
                'success' => true, 
                'redirect' => $this->generateUrl('app_groupe_j_d_r_edit', ['id' => $groupeJdr->getId()])
            ], 200);
        }
    
        // Si l'utilisateur n'était pas dans le groupe
        return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé dans ce groupe'], 404);
    }
    

    #[Route('/api/request_join/{groupeId}', name: 'request_join', methods: ['POST'])]
    public function requestJoin(
        int $groupeId,
        Request $request,
        EntityManagerInterface $entityManager,
        GroupeJDRRepository $groupeJdrRepository,
        InvitationRepository $invitationRepository
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
    
        $entityManager->persist($invitation);
        $entityManager->flush();
    
        if ($request->isXmlHttpRequest()) {
            return $this->json(['success' => 'Demande envoyée avec succès.'], Response::HTTP_OK);
        }
    
        $this->addFlash('success', 'Demande envoyée avec succès.');
        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeId]);
    }

    #[Route('/api/respond_invitation/{invitationId}', name: 'respond_invitation', methods: ['POST'])]
    public function respondInvitation(
        int $invitationId,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            $this->addFlash('error', 'Vous devez être connecté pour faire cette action.');
            return $this->redirectToRoute('app_login');
        }

        $invitation = $entityManager->getRepository(Invitation::class)->find($invitationId);
        if (!$invitation || $invitation->getUser() !== $currentUser) {
            $this->addFlash('error', 'Invitation non trouvée ou accès non autorisé.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }

        $response = $request->request->get('response');
        $groupeJdr = $invitation->getGroupeJDR();

        $notificationHistory = new NotificationHistory();
        $notificationHistory->setUser($invitation->getRequestedBy());
        $notificationHistory->setGroupeJDR($groupeJdr);
        $notificationHistory->setCreatedAt(new \DateTime());

        if ($response === 'accept') {
            if ($invitation->getInitiatedBy() === 'user') {
                $invitedUser = $invitation->getRequestedBy();
            } else {
                $invitedUser = $invitation->getUser();
            }

            if (!$groupeJdr->getPlayers()->contains($invitedUser)) {
                $groupeJdr->addPlayer($invitedUser);
                $invitation->setStatus('accepted');
                $this->addFlash('success', 'L\'utilisateur a été ajouté avec succès au groupe.');
                $notificationHistory->setStatus('accepted');
            } else {
                $this->addFlash('warning', 'Cet utilisateur est déjà dans le groupe.');
                return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJdr->getId()]);
            }
        } elseif ($response === 'refuse') {
            $invitation->setStatus('refused');
            $this->addFlash('info', 'Invitation refusée.');
            $notificationHistory->setStatus('refused');
        } else {
            $this->addFlash('danger', 'Réponse invalide.');
            return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJdr->getId()]);
        }

        $entityManager->persist($notificationHistory);
        $entityManager->remove($invitation);
        $entityManager->flush();

        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJdr->getId()]);
    }
}

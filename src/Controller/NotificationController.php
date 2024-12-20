<?php

namespace App\Controller;

use App\Entity\Friendship;
use App\Entity\Invitation;
use App\Entity\Notification;
use App\Repository\FriendshipRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\NotificationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NotificationController extends AbstractController
{
    #[Route('/notifications', name: 'app_notifications_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function invitationsNotificationsIndex(
        InvitationRepository $invitationRepository,
        NotificationRepository $notificationRepository,
        FriendshipRepository $friendshipRepository
    ): Response {
        $user = $this->getUser();

        $invitations = $invitationRepository->findBy([
            'user' => $user,
            'status' => 'pending'
        ]);
    
        $invitationsData = array_map(function ($invitation) {
            return [
                'invitation' => $invitation,
                'initiatedByOwner' => ($invitation->getInitiatedBy() === 'owner'),
                'initiatedByUser' => ($invitation->getInitiatedBy() === 'user'),
                'requestedBy' => $invitation->getRequestedBy(),
            ];
        }, $invitations);

        $notifications = $notificationRepository->findBy([
            'recipient' => $user,
            'isRead' => false
        ]);

        $friendRequests = $friendshipRepository->findBy([
            'receiver' => $user,
            'status' => Friendship::STATUS_PENDING
        ]);

        return $this->render('notification/index.html.twig', [
            'invitationsData' => $invitationsData,
            'notifications' => $notifications,
            'friendRequests' => $friendRequests,
        ]);
    }

    #[Route('/api/invitations_pending', name: 'app_invitations_pending')]
    #[IsGranted('ROLE_USER')]
    public function getPendingInvitations(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
    
        try {
            $invitations = $entityManager->getRepository(Invitation::class)
                ->findBy(['user' => $user, 'status' => 'pending']);
    
            $data = [];
            foreach ($invitations as $invitation) {
                $groupeJDR = $invitation->getGroupeJDR();
                $groupeJDRData = $groupeJDR ? [
                    'title' => $groupeJDR->getTitle(),
                    'description' => $groupeJDR->getDescription(),
                    'players' => count($groupeJDR->getPlayers())
                ] : null;
    
                $data[] = [
                    'id' => $invitation->getId(),
                    'requestedBy' => $invitation->getRequestedBy() ? $invitation->getRequestedBy()->getUsername() : 'Unknown',
                    'initiatedBy' => $invitation->getInitiatedBy(),
                    'groupeJDR' => $groupeJDRData,
                    'message' => $invitation->getMessage() ?: 'No message provided',
                ];
            }

            return new JsonResponse(['invitations' => $data, 'count' => count($data)], 200);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'An error occurred while fetching invitations', 'details' => $e->getMessage()], 500);
        }
    }

    #[Route('/api/notifications_pending', name: 'app_notifications_pending')]
    #[IsGranted('ROLE_USER')]
    public function getPendingNotifications(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
    
        try {
            $notifications = $entityManager->getRepository(Notification::class)
                ->findBy(['recipient' => $user, 'isRead' => false]);
    
            $data = [];
            foreach ($notifications as $notification) {
                $data[] = [
                    'id' => $notification->getId(),
                    'message' => $notification->getMessage(),
                    'date' => $notification->getCreatedAt()->format('Y-m-d H:i:s'),
                ];
            }
    
            return new JsonResponse(['notifications' => $data, 'count' => count($data)], 200);
    
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'An error occurred while fetching notifications', 'details' => $e->getMessage()], 500);
        }
    }

    #[Route('/notifications/{id}/respond', name: 'app_notifications_respond', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function respondNotification(Notification $notification, Request $request, EntityManagerInterface $entityManager): Response
    {
        $notification->setRead(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_notifications_index');
    }

    #[Route('/notifications/clear', name: 'app_notifications_clear_all', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function clearAllNotifications(EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $this->getUser();
        
        $notifications = $entityManager->getRepository(Notification::class)->findBy(['recipient' => $user]);

        foreach ($notifications as $notification) {
            $entityManager->remove($notification);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_notifications_index');
    }
}

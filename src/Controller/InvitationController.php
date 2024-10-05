<?php

namespace App\Controller;

use App\Entity\Invitation;
use App\Entity\NotificationHistory;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InvitationController extends AbstractController
{
    
    #[Route('/invitations', name: 'app_invitations_index', methods: ['GET'])]
    public function index(InvitationRepository $invitationRepository): Response
    {
        $user = $this->getUser();
        
        $invitations = $invitationRepository->findBy([
            'user' => $user, 
            'status' => 'pending'
        ]);

        return $this->render('invitation/index.html.twig', [
            'invitations' => $invitations,
        ]);
    }

    #[Route('/api/invitations_pending', name: 'app_invitations_pending')]
    public function getPendingInvitations(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'User not connected'], 403);
        }
    
        try {
            $invitations = $entityManager->getRepository(Invitation::class)
                ->findBy(['user' => $user, 'status' => 'pending']);
    
            if (!$invitations) {
                return new JsonResponse(['invitations' => [], 'count' => 0], 200);
            }
    
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

    #[Route('/invitations/{id}/respond', name: 'app_invitations_respond', methods: ['POST'])]
    public function respondInvitation(
        Invitation $invitation,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $response = $request->request->get('response');

        $notificationHistory = new NotificationHistory();
        $notificationHistory->setUser($invitation->getUser());
        $notificationHistory->setGroupeJDR($invitation->getGroupeJDR());
        $notificationHistory->setStatus($response === 'accept' ? 'accepted' : 'refused');
        $notificationHistory->setCreatedAt(new \DateTime());

        if ($response === 'accept') {
            $groupeJDR = $invitation->getGroupeJDR();
            $groupeJDR->addPlayer($invitation->getUser());
            $entityManager->persist($groupeJDR);
        }

        $entityManager->persist($notificationHistory);
        $entityManager->remove($invitation);
        $entityManager->flush();

        return $this->redirectToRoute('app_invitations_index');
    }
}

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

#[Route('/invitations')]
class InvitationController extends AbstractController
{
    #[Route('/', name: 'app_invitations_index', methods: ['GET'])]
    public function index(InvitationRepository $invitationRepository): Response
    {
        $user = $this->getUser();
        $invitations = $invitationRepository->findBy(['user' => $user, 'status' => 'pending']);

        return $this->render('invitation/index.html.twig', [
            'invitations' => $invitations,
        ]);
    }

    #[Route('/{id}/respond', name: 'app_invitations_respond', methods: ['POST'])]
    public function respond(Invitation $invitation, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($invitation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }
    
        $response = json_decode($request->getContent(), true)['response'];
        
        $notificationHistory = new NotificationHistory();
        $notificationHistory->setUser($invitation->getUser());
        $notificationHistory->setGroupeJDR($invitation->getGroupeJDR());
        $notificationHistory->setStatus($response === 'accept' ? 'accepted' : 'refused');
        $notificationHistory->setCreatedAt(new \DateTime());
    
        $entityManager->persist($notificationHistory);
        
        if ($response === 'accept') {
            $invitation->setStatus('accepted');
            $groupeJDR = $invitation->getGroupeJDR();
            $groupeJDR->addPlayer($invitation->getUser());
            $entityManager->persist($groupeJDR);
        } else {
            $invitation->setStatus('refused');
        }
    
        $entityManager->remove($invitation);
        $entityManager->flush();
    
        return new JsonResponse(['success' => true]);
    }
}

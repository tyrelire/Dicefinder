<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Friendship;
use App\Service\NotificationService;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FriendShipController extends AbstractController
{
    private $entityManager;
    private $friendshipRepository;
    private $notificationService;

    public function __construct(EntityManagerInterface $entityManager, FriendshipRepository $friendshipRepository, NotificationService $notificationService)
    {
        $this->entityManager = $entityManager;
        $this->friendshipRepository = $friendshipRepository;
        $this->notificationService = $notificationService;
    }

    #[Route('/add-friend/{id}', name: 'add_friend')]
    public function addFriend(User $user): Response
    {
        $currentUser = $this->getUser();
    
        $blockedFriendship = $this->friendshipRepository->findOneBy([
            'requester' => $currentUser,
            'receiver' => $user,
            'status' => Friendship::STATUS_BLOCKED,
        ]) ?? $this->friendshipRepository->findOneBy([
            'requester' => $user,
            'receiver' => $currentUser,
            'status' => Friendship::STATUS_BLOCKED,
        ]);
    
        if ($blockedFriendship) {
            $this->addFlash('error', 'Vous ne pouvez pas envoyer de demande d\'amitié car l\'un de vous a bloqué l\'autre.');
            return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
        }
    
        $existingFriendships = $this->friendshipRepository->findFriendship($currentUser, $user);
    
        if (!empty($existingFriendships)) {
            $this->addFlash('warning', 'Une demande d\'amitié existe déjà entre vous et cet utilisateur.');
            return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
        }
    
        $friendship = new Friendship();
        $friendship->setRequester($currentUser);
        $friendship->setReceiver($user);
        $friendship->setStatus(Friendship::STATUS_PENDING);
    
        $this->entityManager->persist($friendship);
        $this->entityManager->flush();
    
        $this->notificationService->createNotification(
            $currentUser,
            'friend_request_sent',
            sprintf(
                'Votre demande d\'amitié a été envoyée avec succès à %s.',
                $user->getUsername()
            ),
            null,
            null,
            $user
        );
    
        $this->addFlash('success', 'Demande d\'amitié envoyée avec succès.');
        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }
    

    #[Route('/remove-friend/{id}', name: 'remove_friend')]
    public function removeFriend(User $user): Response
    {
        $currentUser = $this->getUser();

        $friendship = $this->friendshipRepository->findFriendship($currentUser, $user);
        if ($friendship) {
            $this->entityManager->remove($friendship);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }

    #[Route('/block-user/{id}', name: 'block_user')]
    public function blockUser(User $user): Response
    {
        $currentUser = $this->getUser();

        $friendship = $this->friendshipRepository->findFriendship($currentUser, $user);
        if ($friendship) {
            $friendship->setStatus(Friendship::STATUS_BLOCKED);
            $this->entityManager->flush();
        } else {
            $friendship = new Friendship();
            $friendship->setRequester($currentUser);
            $friendship->setReceiver($user);
            $friendship->setStatus(Friendship::STATUS_BLOCKED);

            $this->entityManager->persist($friendship);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }

    #[Route('/accept-friends-request/{id}', name: 'accept_request')]
    #[IsGranted('ROLE_USER')]
    public function acceptRequest($id, FriendshipRepository $friendshipRepository): Response
    {
        $user = $this->getUser();
        $friendship = $friendshipRepository->find($id);

        if (!$friendship || $friendship->getReceiver() !== $user) {
            throw $this->createNotFoundException('Demande d\'amitié non trouvée ou non autorisée.');
        }

        $friendship->setStatus(Friendship::STATUS_ACCEPTED);
        $this->entityManager->persist($friendship);
        $this->entityManager->flush();

        $this->addFlash('success', 'Demande d\'amitié acceptée avec succès.');

        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }

    #[Route('/accept-friends-request-base/{id}', name: 'accept_request_base', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function acceptRequestBase($id, FriendshipRepository $friendshipRepository, Request $request): JsonResponse
    {
        $user = $this->getUser();
        $friendship = $friendshipRepository->find($id);

        if (!$friendship || $friendship->getReceiver() !== $user) {
            return new JsonResponse(['success' => false, 'message' => 'Demande d\'amitié non trouvée ou non autorisée.'], 404);
        }

        $friendship->setStatus(Friendship::STATUS_ACCEPTED);
        $this->entityManager->persist($friendship);
        $this->entityManager->flush();

        return new JsonResponse(['success' => true, 'message' => 'Demande d\'amitié acceptée avec succès.']);
    }

    #[Route('/decline-friends-request/{id}', name: 'decline_request')]
    #[IsGranted('ROLE_USER')]
    public function declineRequest($id, FriendshipRepository $friendshipRepository): Response
    {
        $user = $this->getUser();
        $friendship = $friendshipRepository->find($id);

        if (!$friendship || $friendship->getReceiver() !== $user) {
            throw $this->createNotFoundException('Demande d\'amitié non trouvée ou non autorisée.');
        }

        $this->entityManager->remove($friendship);
        $this->entityManager->flush();

        $this->addFlash('error', 'Demande d\'amitié refusée avec succès.');

        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }

    #[Route('/decline-friends-request-base/{id}', name: 'decline_request_base', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function declineRequestBase($id, FriendshipRepository $friendshipRepository, Request $request): JsonResponse
    {
        $user = $this->getUser();
        $friendship = $friendshipRepository->find($id);

        if (!$friendship || $friendship->getReceiver() !== $user) {
            return new JsonResponse(['success' => false, 'message' => 'Demande d\'amitié non trouvée ou non autorisée.'], 404);
        }

        $this->entityManager->remove($friendship);
        $this->entityManager->flush();
        $this->addFlash('success', 'Demande d\'amitié acceptée avec succès.');

        return new JsonResponse(['success' => true, 'message' => 'Demande d\'amitié refusée avec succès.']);
    }
}

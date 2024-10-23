<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Friendship;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FriendShipController extends AbstractController
{
    private $entityManager;
    private $friendshipRepository;

    public function __construct(EntityManagerInterface $entityManager, FriendshipRepository $friendshipRepository)
    {
        $this->entityManager = $entityManager;
        $this->friendshipRepository = $friendshipRepository;
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
            $this->addFlash('danger', 'Vous ne pouvez pas envoyer de demande d\'amitié car l\'un de vous a bloqué l\'autre.');
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

    #[Route('/accept-request/{id}', name: 'accept_request')]
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

    #[Route('/decline-request/{id}', name: 'decline_request')]
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

        $this->addFlash('success', 'Demande d\'amitié refusée avec succès.');

        return $this->redirectToRoute('app_profile_show', ['id' => $user->getId()]);
    }
}

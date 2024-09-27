<?php

namespace App\Controller;

use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use App\Repository\UserRepository;
use App\Repository\GroupeJDRRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlayerInvitationController extends AbstractController
{
    #[Route('/api/check_user/{pseudo}/{jdrId}', name: 'check_user', methods: ['GET'])]
    public function checkUser(
        string $pseudo, 
        int $jdrId, 
        UserRepository $userRepository, 
        GroupeJDRRepository $groupeJdrRepository
    ): JsonResponse {
        $user = $userRepository->findOneBy(['username' => $pseudo]);
        if (!$user) {
            return new JsonResponse(['exists' => false, 'message' => 'Le pseudo n\'existe pas.']);
        }
    
        $groupeJdr = $groupeJdrRepository->find($jdrId);
        if (!$groupeJdr) {
            return new JsonResponse(['exists' => false, 'message' => 'Groupe JDR non trouvé.']);
        }
    
        if ($groupeJdr->getOwner() === $user) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => false,
                'error' => true,
                'message' => 'Un maître de jeu ne peut pas être joueur dans son propre JDR.'
            ]);
        }
    
        $isInGroup = $groupeJdr->getPlayers()->contains($user);
        if ($isInGroup) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => true,
                'message' => 'L\'utilisateur est déjà dans le JDR avec le pseudo exact.'
            ]);
        }
    
        if ($user->getUsername() !== $pseudo) {
            return new JsonResponse([
                'exists' => true, 
                'inGroup' => false, 
                'caseMismatch' => true,
                'message' => 'Le pseudo existe, mais la casse ne correspond pas. Veuillez saisir le pseudo exact.'
            ]);
        }
    
        return new JsonResponse([
            'exists' => true, 
            'inGroup' => false, 
            'id' => $user->getId()
        ]);
    }

    #[Route('/api/invite/{groupeId}/{pseudo}', name: 'invite_player', methods: ['POST'])]
    public function invitePlayer(
        int $groupeId,
        string $pseudo,
        UserRepository $userRepository,
        GroupeJDRRepository $groupeJDRRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $groupeJDR = $groupeJDRRepository->find($groupeId);
        if (!$groupeJDR) {
            return new JsonResponse(['error' => 'Groupe JDR non trouvé'], 404);
        }

        // Récupérer l'utilisateur actuel
        $currentUser = $this->getUser();

        // Vérifier si l'utilisateur actuel est le propriétaire du JDR
        if ($groupeJDR->getOwner() === $currentUser) {
            return new JsonResponse(['error' => 'Vous ne pouvez pas être joueur dans votre propre JDR'], 403);
        }

        $user = $userRepository->findOneBy(['username' => $pseudo]);
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non trouvé'], 404);
        }

        if ($user->getJoinedGroupeJDRs()->count() >= 15) {
            return new JsonResponse(['error' => 'L\'utilisateur a déjà atteint le nombre maximum de groupes de JDR'], 403);
        }

        if ($groupeJDR->getPlayers()->contains($user)) {
            return new JsonResponse(['error' => 'L\'utilisateur est déjà dans le JDR'], 400);
        }

        $existingInvitation = $entityManager->getRepository(Invitation::class)->findOneBy([
            'user' => $user,
            'groupeJDR' => $groupeJDR,
        ]);

        if ($existingInvitation) {
            if ($existingInvitation->getStatus() === 'pending') {
                return new JsonResponse(['error' => 'Une invitation est toujours en attente'], 400);
            } elseif ($existingInvitation->getStatus() === 'refused') {
                $existingInvitation->setStatus('pending');
                $entityManager->flush();
                return new JsonResponse(['message' => 'Invitation renvoyée avec succès']);
            }
        }
        
        $invitation = new Invitation();
        $invitation->setUser($user);
        $invitation->setGroupeJDR($groupeJDR);
        $invitation->setStatus('pending');

        error_log('Nouvelle invitation : User ID ' . $user->getId() . ', Groupe ID ' . $groupeId);

        $entityManager->persist($invitation);
        $entityManager->flush();

        error_log('Invitation ajoutée avec succès : User ID ' . $user->getId() . ', Groupe ID ' . $groupeId);

        return new JsonResponse(['message' => 'Invitation envoyée avec succès']);
    }

    #[Route('/api/remove_user/{userId}/{jdrId}', name: 'remove_user_from_jdr', methods: ['DELETE'])]
    public function removeUserFromJdr(int $userId, int $jdrId, UserRepository $userRepository, GroupeJDRRepository $groupeJdrRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $userRepository->find($userId);
        $groupeJdr = $groupeJdrRepository->find($jdrId);

        if ($user && $groupeJdr) {
            if ($groupeJdr->getPlayers()->contains($user)) {
                $groupeJdr->removePlayer($user);
                $entityManager->flush();

                return new JsonResponse(['success' => true, 'redirect' => $this->generateUrl('app_groupe_j_d_r_edit', ['id' => $jdrId])]);
            }
        }
        return new JsonResponse(['success' => false, 'message' => 'Utilisateur ou groupe non trouvé'], 404);
    }
}

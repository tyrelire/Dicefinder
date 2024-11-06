<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\FirebaseService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FirebaseController extends AbstractController
{
    private FirebaseService $firebaseService;
    private EntityManagerInterface $entityManager;
    private LoggerInterface $logger;

    public function __construct(FirebaseService $firebaseService, EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->firebaseService = $firebaseService;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    #[Route('/chat', name: 'chat')]
    public function showChat(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $userId = $user->getId();
        $userAvatar = $user->getAvatar();
        $conversations = $this->firebaseService->getUserConversations($userId);

        return $this->render('chat/index.html.twig', [
            'userId' => $userId,
            'userAvatar' => $userAvatar,
            'conversations' => $conversations,
        ]);
    }

    #[Route('/chat/message/{userId}', name: 'send_message', methods: ['GET'])]
    public function sendMessageToUser(int $userId): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            return $this->redirectToRoute('app_login');
        }

        $targetUser = $this->entityManager->getRepository(User::class)->find($userId);
        if (!$targetUser) {
            return $this->redirectToRoute('chat', ['error' => 'Utilisateur introuvable']);
        }

        try {
            $conversation = $this->firebaseService->findOrCreatePrivateConversation($currentUser->getId(), $userId);

            return $this->redirectToRoute('chat', [
                'conversationId' => $conversation->getId()
            ]);
        } catch (\Exception $e) {
            $this->logger->error("Erreur lors de la création de la conversation : " . $e->getMessage());
            return $this->redirectToRoute('chat', ['error' => 'Erreur lors de la création de la conversation']);
        }
    }

    #[Route('/chat/get-conversations', name: 'get_conversations', methods: ['GET'])]
    public function getConversations(): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], Response::HTTP_UNAUTHORIZED);
        }
    
        $conversations = $this->firebaseService->getUserConversations($user->getId());
        $conversationData = array_map(function ($conversation) use ($user) {
            $contactParticipant = $conversation->getParticipants()
                ->filter(fn($p) => $p && $p->getUser() && $p->getUser()->getId() !== $user->getId())
                ->first();

            if (!$contactParticipant || !$contactParticipant->getUser()) {
                $contact = $user;
                $contactUsername = 'Moi';
            } else {
                $contact = $contactParticipant->getUser();
                $contactUsername = $contact->getUsername();
            }

            $avatarUrl = $contact->getAvatar() 
                ? '/uploads/avatars/' . $contact->getAvatar() 
                : '/images/default-avatar.png';

            return [
                'id' => $conversation->getId(),
                'contactUsername' => $contactUsername,
                'avatarUrl' => $avatarUrl,
            ];
        }, $conversations);

        return new JsonResponse(array_filter($conversationData));
    }
    


    #[Route('/chat/private/{userId}', name: 'start_private_conversation', methods: ['POST'])]
    public function startPrivateConversation(int $userId): JsonResponse
    {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], Response::HTTP_UNAUTHORIZED);
        }

        $targetUser = $this->entityManager->getRepository(User::class)->find($userId);
        if (!$targetUser) {
            return new JsonResponse(['error' => 'Utilisateur cible introuvable'], Response::HTTP_NOT_FOUND);
        }

        try {
            $conversation = $this->firebaseService->findOrCreatePrivateConversation($currentUser->getId(), $userId);
            return new JsonResponse(['conversationId' => $conversation->getId()]);
        } catch (\Exception $e) {
            $this->logger->error("Erreur lors de la création de la conversation : " . $e->getMessage());
            return new JsonResponse(['error' => 'Erreur lors de la création de la conversation'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/user/search', name: 'user_search', methods: ['GET'])]
    public function searchUsers(Request $request): JsonResponse
    {
        $searchTerm = $request->query->get('query', '');
        $users = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.username LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $userList = array_map(fn($user) => [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
        ], $users);

        return new JsonResponse($userList);
    }

    #[Route('/api/chat/messages', name: 'chat_messages')]
    public function getChatMessages(): JsonResponse
    {
        $messages = $this->firebaseService->getMessages();
        foreach ($messages as &$message) {
            $sender = $this->entityManager->getRepository(User::class)->find($message['sender_id']);
            $message['sender_avatar'] = $sender ? '/uploads/avatars/' . $sender->getAvatar() : '/images/default-avatar.png';
        }

        return new JsonResponse($messages);
    }

    #[Route('/chat/conversation/{conversationId}/messages', name: 'get_conversation_messages', methods: ['GET'])]
    public function getConversationMessages(int $conversationId): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], Response::HTTP_UNAUTHORIZED);
        }

        $conversations = $this->firebaseService->getUserConversations($user->getId());
        $isParticipant = array_filter($conversations, fn($conversation) => $conversation->getId() === $conversationId);

        if (!$isParticipant) {
            return new JsonResponse(['error' => 'Accès non autorisé à cette conversation'], Response::HTTP_FORBIDDEN);
        }

        $messages = $this->firebaseService->getMessages($conversationId);
        return new JsonResponse($messages);
    }
}

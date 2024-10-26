<?php

namespace App\Controller;

use App\Service\MessageService;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    private MessageService $messageService;
    private UserRepository $userRepository;

    public function __construct(MessageService $messageService, UserRepository $userRepository)
    {
        $this->messageService = $messageService;
        $this->userRepository = $userRepository;
    }

    #[Route('/chat', name: 'chat')]
    public function chat(): Response
    {
        $currentUser = $this->getUser();
        $conversations = $this->messageService->getUserConversations($currentUser->getUsername());

        return $this->render('chat/index.html.twig', [
            'currentUser' => $currentUser->getUsername(),
            'conversations' => $conversations,
        ]);
    }

    #[Route('/send-message', name: 'send_message', methods: ['POST'])]
    public function sendMessage(Request $request): JsonResponse
    {
        $fromUser = $this->getUser()->getUsername();
        $data = json_decode($request->getContent(), true);
        $toUser = $data['toUser'] ?? null;
        $message = $data['message'] ?? null;

        if (!$toUser || !$message) {
            return new JsonResponse(['error' => 'Missing data'], 400);
        }

        $toUserEntity = $this->userRepository->findOneByUsername($toUser);
        if (!$toUserEntity) {
            return new JsonResponse(['error' => 'Recipient not found'], 404);
        }

        $this->messageService->sendMessage(
            $fromUser,
            $toUser,
            $this->getUser()->getId(),
            $toUserEntity->getId(),
            $message
        );

        return new JsonResponse(['status' => 'Message sent']);
    }

    #[Route('/get-messages', name: 'get_messages', methods: ['GET'])]
    public function getMessages(Request $request): JsonResponse
    {
        $fromUser = $this->getUser()->getUsername();
        $toUser = $request->query->get('toUser');

        if (!$toUser) {
            return new JsonResponse(['error' => 'Missing recipient'], 400);
        }

        $messages = $this->messageService->getMessages($fromUser, $toUser);

        return new JsonResponse($messages);
    }

    #[Route('/mark-messages-as-read', name: 'mark_messages_as_read', methods: ['POST'])]
    public function markMessagesAsRead(Request $request): JsonResponse
    {
        $fromUser = $this->getUser()->getUsername();
        $toUser = $request->query->get('toUser');

        if (!$toUser) {
            return new JsonResponse(['error' => 'Recipient not specified'], 400);
        }

        $this->messageService->markMessageAsRead($fromUser, $toUser);

        return new JsonResponse(['status' => 'Messages marked as read']);
    }


    #[Route('/search-users', name: 'search_users', methods: ['GET'])]
    public function searchUsers(Request $request, UserRepository $userRepository): JsonResponse
    {
        $query = $request->query->get('q', '');
        if (empty($query)) {
            return new JsonResponse([]);
        }
        $users = $userRepository->findByUsernameQuery($query);
        $usernames = array_map(fn($user) => $user->getUsername(), $users);
        return new JsonResponse($usernames);
    }
}

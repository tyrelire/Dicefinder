<?php

namespace App\Service;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use RuntimeException;

class MessageService
{
    private Database $database;

    public function __construct(Factory $firebase)
    {
        $credentialsPath = __DIR__ . '/../../config/firebase_credentials.json';
        if (!file_exists($credentialsPath)) {
            throw new RuntimeException("Le fichier de configuration Firebase n'a pas été trouvé : " . $credentialsPath);
        }
        $this->database = $firebase
            ->withServiceAccount($credentialsPath)
            ->withDatabaseUri('https://dicefinder-42b86-default-rtdb.europe-west1.firebasedatabase.app/')
            ->createDatabase();
    }

    public function sendMessage(string $fromUser, string $toUser, string $fromUserId, string $toUserId, string $message): void
    {
        $messageData = [
            'from' => $fromUser,
            'fromUserId' => $fromUserId,
            'to' => $toUser,
            'toUserId' => $toUserId,
            'message' => $message,
            'timestamp' => (new \DateTime())->getTimestamp(),
            'isRead' => false
        ];
        $users = [$fromUser, $toUser];
        sort($users);
        $this->database->getReference('messages/' . $users[0] . '_' . $users[1])
            ->push($messageData);
    }

    public function markMessageAsRead(string $fromUser, string $toUser): void
    {
        $users = [$fromUser, $toUser];
        sort($users);
        $messagesRef = $this->database->getReference('messages/' . $users[0] . '_' . $users[1]);

        $messages = $messagesRef->getValue();

        if ($messages) {
            foreach ($messages as $key => $message) {
                $messagesRef->getChild($key)->update(['isRead' => true]);
            }
        }
    }

    public function getMessages(string $user1, string $user2): array
    {
        $users = [$user1, $user2];
        sort($users);
        $messages = $this->database->getReference('messages/' . $users[0] . '_' . $users[1])
            ->getValue();
        return $messages ? array_values($messages) : [];
    }

    public function getUserConversations(string $username): array
    {
        $reference = $this->database->getReference('messages');
        $messages = $reference->getValue();
        $conversations = [];
    
        if ($messages) {
            foreach ($messages as $key => $conversation) {
                if (strpos($key, $username) !== false) {
                    $otherUser = str_replace([$username . '_', '_' . $username], '', $key);
                    $lastMessage = end($conversation);
    
                    $conversations[] = [
                        'user' => $otherUser,
                        'userId' => $lastMessage['toUserId'] ?? '',
                        'messages' => array_values($conversation),
                        'lastMessage' => $lastMessage['message'] ?? '',
                        'isRead' => $lastMessage['isRead'] ?? false,
                        'timestamp' => $lastMessage['timestamp'] ?? null,  // Assurez-vous que timestamp est bien renvoyé
                    ];
                }
            }
        }
    
        return $conversations;
    }
    
}

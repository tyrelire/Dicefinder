<?php

namespace App\Service;

use App\Entity\User;
use RuntimeException;
use App\Entity\Conversation;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Entity\ConversationParticipant;
use Doctrine\ORM\EntityManagerInterface;

class FirebaseService
{
    private Database $database;
    private EntityManagerInterface $entityManager;

    public function __construct(Factory $firebase, EntityManagerInterface $entityManager)
    {
        $credentialsPath = __DIR__ . '/../../config/firebase_credentials.json';
        if (!file_exists($credentialsPath)) {
            throw new RuntimeException("Le fichier de configuration Firebase n'a pas été trouvé : " . $credentialsPath);
        }

        $this->database = $firebase
            ->withServiceAccount($credentialsPath)
            ->withDatabaseUri('https://dicefinder-42b86-default-rtdb.europe-west1.firebasedatabase.app/')
            ->createDatabase();

        $this->entityManager = $entityManager;
    }

    public function saveMessage(int $conversationId, int $senderId, string $content)
    {
        $timestamp = time();
        $messageData = [
            'sender_id' => $senderId,
            'timestamp' => $timestamp,
            'content' => $content,
            'status' => 'unread',
        ];

        $this->database->getReference("conversations/{$conversationId}/messages")
            ->push($messageData);

        return $messageData;
    }

    public function getMessages(int $conversationId): array
    {
        $messages = $this->database->getReference("conversations/{$conversationId}/messages")
            ->getValue();

        return $messages ? array_values($messages) : [];
    }

    public function updateMessageStatus(int $conversationId, string $messageId, string $status): void
    {
        $this->database->getReference("conversations/{$conversationId}/messages/{$messageId}/status")
            ->set($status);
    }

    public function getUserConversations(int $userId): array
    {
        $conversations = $this->entityManager->getRepository(Conversation::class)
            ->createQueryBuilder('c')
            ->join('c.participants', 'p')
            ->where('p.user = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getResult();
    
        return $conversations;
    }

    public function markAllMessagesAsRead(int $conversationId): void
    {
        $messages = $this->database->getReference("conversations/{$conversationId}/messages")
            ->getValue();

        if ($messages) {
            foreach ($messages as $messageId => $messageData) {
                $this->database->getReference("conversations/{$conversationId}/messages/{$messageId}/status")
                    ->set('read');
            }
        }
    }

    public function findOrCreatePrivateConversation(int $userId1, int $userId2): Conversation
    {
        $conversation = $this->entityManager->getRepository(Conversation::class)
        ->createQueryBuilder('c')
        ->join('c.participants', 'p1')
        ->join('c.participants', 'p2')
        ->where('p1.user = :user1')
        ->andWhere('p2.user = :user2')
        ->andWhere('p1 != p2') 
        ->setParameter('user1', $userId1)
        ->setParameter('user2', $userId2)
        ->getQuery()
        ->getOneOrNullResult();
    
    
        if (!$conversation) {
            $conversation = new Conversation();
            
            $conversation->setLastActivity(new \DateTime());
            $conversation->setArchived(false);
    
            $this->entityManager->persist($conversation);
    
            $participant1 = new ConversationParticipant();
            $participant1->setConversation($conversation);
            $participant1->setUser($this->entityManager->getRepository(User::class)->find($userId1));
            $participant1->setStatus('active');
            $this->entityManager->persist($participant1);
    
            $participant2 = new ConversationParticipant();
            $participant2->setConversation($conversation);
            $participant2->setUser($this->entityManager->getRepository(User::class)->find($userId2));
            $participant2->setStatus('active');
            $this->entityManager->persist($participant2);
    
            $this->entityManager->flush();
        }
        return $conversation;
    }
}

<?php

namespace App\Service;

use App\Entity\Notification;
use App\Entity\User;
use App\Entity\GroupeJDR;
use Doctrine\ORM\EntityManagerInterface;

class NotificationService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createNotification(User $recipient, string $type, ?string $message = null, ?GroupeJDR $groupeJDR = null): void
    {
        $notification = new Notification();
        $notification->setRecipient($recipient);
        $notification->setType($type);
        $notification->setMessage($message);
        $notification->setGroupeJDR($groupeJDR);
        $notification->setCreatedAt(new \DateTime());
        $notification->setRead(false);

        $this->entityManager->persist($notification);
        $this->entityManager->flush();
    }
}

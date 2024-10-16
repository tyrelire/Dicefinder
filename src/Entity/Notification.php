<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?user $recipient = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?GroupeJDR $groupeJDR = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column]
    private ?bool $isRead = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipient(): ?user
    {
        return $this->recipient;
    }

    public function setRecipient(?user $recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getGroupeJDR(): ?GroupeJDR
    {
        return $this->groupeJDR;
    }

    public function setGroupeJDR(?GroupeJDR $groupeJDR): static
    {
        $this->groupeJDR = $groupeJDR;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function isRead(): ?bool
    {
        return $this->isRead;
    }

    public function setRead(bool $isRead): static
    {
        $this->isRead = $isRead;

        return $this;
    }
}

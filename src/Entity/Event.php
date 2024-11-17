<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dayOfWeek = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $eventTime = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    private ?GroupeJDR $groupeJDR = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $specificDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $recurrence = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isRecurrent = false;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $duration = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(?string $dayOfWeek): static
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getEventTime(): ?\DateTimeInterface
    {
        return $this->eventTime;
    }

    public function setEventTime(\DateTimeInterface $eventTime): static
    {
        $this->eventTime = $eventTime;

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

    public function getSpecificDate(): ?\DateTimeInterface
    {
        return $this->specificDate;
    }

    public function setSpecificDate(?\DateTimeInterface $specificDate): static
    {
        $this->specificDate = $specificDate;

        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): static
    {
        $this->recurrence = $recurrence;

        return $this;
    }

    public function isRecurrent(): bool
    {
        return $this->isRecurrent;
    }

    public function setIsRecurrent(bool $isRecurrent): static
    {
        $this->isRecurrent = $isRecurrent;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function calculateEndTime(): ?\DateTimeInterface
    {
        if ($this->eventTime && $this->duration) {
            $startTime = \DateTime::createFromFormat('H:i:s', $this->eventTime->format('H:i:s'));
            if (!$startTime) {
                return null;
            }
    
            // Ajoute la durée
            $startTime->modify("+{$this->duration} minutes");
            return $startTime;
        }
        return null;
    }
    
}

<?php

namespace App\Entity;

use App\Repository\PlayerMembershipRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerMembershipRepository::class)]
class PlayerMembership
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'playerMemberships')]
    private ?User $player = null;

    #[ORM\ManyToOne(inversedBy: 'playerMemberships')]
    private ?GroupeJDR $groupeJDR = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $joinedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer(): ?User
    {
        return $this->player;
    }

    public function setPlayer(?User $player): static
    {
        $this->player = $player;

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

    public function getJoinedAt(): ?\DateTimeInterface
    {
        return $this->joinedAt;
    }

    public function setJoinedAt(?\DateTimeInterface $joinedAt): static
    {
        $this->joinedAt = $joinedAt;

        return $this;
    }
}

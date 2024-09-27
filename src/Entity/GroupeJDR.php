<?php

namespace App\Entity;

use App\Repository\GroupeJDRRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\User;

#[ORM\Entity(repositoryClass: GroupeJDRRepository::class)]
class GroupeJDR
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $edit_at = null;

    #[ORM\Column]
    private ?int $maxPlayer = 15;

    #[ORM\ManyToOne(inversedBy: 'groupeJDRs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $owner = null;

    #[ORM\ManyToMany(targetEntity: User::class)]
    #[ORM\JoinTable(name: 'groupejdr_players')]
    private Collection $players;

    /**
     * @var Collection<int, Invitation>
     */
    #[ORM\OneToMany(targetEntity: Invitation::class, mappedBy: 'groupeJDR')]
    private Collection $invitations;

    /**
     * @var Collection<int, NotificationHistory>
     */
    #[ORM\OneToMany(targetEntity: NotificationHistory::class, mappedBy: 'groupeJDR')]
    private Collection $notificationHistories;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'groupeJDRs')]
    private Collection $categories;

    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->invitations = new ArrayCollection();
        $this->notificationHistories = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getEditAt(): ?\DateTimeInterface
    {
        return $this->edit_at;
    }

    public function setEditAt(\DateTimeInterface $edit_at): static
    {
        $this->edit_at = $edit_at;

        return $this;
    }

    public function getMaxPlayer(): ?int
    {
        return $this->maxPlayer;
    }

    public function setMaxPlayer(int $maxPlayer): static
    {
        $this->maxPlayer = $maxPlayer;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addPlayer(User $player): static
    {
        // Ajoute uniquement si l'utilisateur a le rôle ROLE_JOUEUR et qu'il n'a pas atteint la limite max
        if (!$this->players->contains($player) && $this->players->count() < $this->maxPlayer && in_array('ROLE_JOUEUR', $player->getRoles())) {
            $this->players->add($player);
        }

        return $this;
    }

    public function removePlayer(User $player): static
    {
        $this->players->removeElement($player);

        return $this;
    }

    /**
     * @return Collection<int, Invitation>
     */
    public function getInvitations(): Collection
    {
        return $this->invitations;
    }

    public function addInvitation(Invitation $invitation): static
    {
        if (!$this->invitations->contains($invitation)) {
            $this->invitations->add($invitation);
            $invitation->setGroupeJDR($this);
        }

        return $this;
    }

    public function removeInvitation(Invitation $invitation): static
    {
        if ($this->invitations->removeElement($invitation)) {
            // set the owning side to null (unless already changed)
            if ($invitation->getGroupeJDR() === $this) {
                $invitation->setGroupeJDR(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, NotificationHistory>
     */
    public function getNotificationHistories(): Collection
    {
        return $this->notificationHistories;
    }

    public function addNotificationHistory(NotificationHistory $notificationHistory): static
    {
        if (!$this->notificationHistories->contains($notificationHistory)) {
            $this->notificationHistories->add($notificationHistory);
            $notificationHistory->setGroupeJDR($this);
        }

        return $this;
    }

    public function removeNotificationHistory(NotificationHistory $notificationHistory): static
    {
        if ($this->notificationHistories->removeElement($notificationHistory)) {
            // set the owning side to null (unless already changed)
            if ($notificationHistory->getGroupeJDR() === $this) {
                $notificationHistory->setGroupeJDR(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        $this->categories->removeElement($category);

        return $this;
    }
}
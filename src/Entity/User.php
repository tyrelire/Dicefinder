<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastName = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $username = null;

    /**
     * @var Collection<int, GroupeJDR>
     */
    #[ORM\OneToMany(targetEntity: GroupeJDR::class, mappedBy: 'owner')]
    private Collection $groupeJDRs;

    #[ORM\ManyToMany(targetEntity: GroupeJDR::class, inversedBy: 'players')]
    private Collection $joinedGroupeJDRs;

    /**
     * @var Collection<int, Invitation>
     */
    #[ORM\OneToMany(targetEntity: Invitation::class, mappedBy: 'user')]
    private Collection $invitations;

    /**
     * @var Collection<int, NotificationHistory>
     */
    #[ORM\OneToMany(targetEntity: NotificationHistory::class, mappedBy: 'user')]
    private Collection $notificationHistories;

    /**
     * @var Collection<int, Invitation>
     */
    #[ORM\OneToMany(targetEntity: Invitation::class, mappedBy: 'requestedBy')]
    private Collection $invitationPending;

    /**
     * @var Collection<int, PlayerMembership>
     */
    #[ORM\OneToMany(targetEntity: PlayerMembership::class, mappedBy: 'player')]
    private Collection $playerMemberships;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $competence = null;

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTime $createdAt = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isVip = false;

    /**
     * @var Collection<int, Notification>
     */
    #[ORM\OneToMany(targetEntity: Notification::class, mappedBy: 'recipient')]
    private Collection $notifications;

    /**
     * @var Collection<int, GroupeJDR>
     */
    #[ORM\ManyToMany(targetEntity: GroupeJDR::class, inversedBy: 'usersFavorited')]
    #[ORM\JoinTable(name: 'user_favorite_jdr')]
    private Collection $favoriteGroupeJDR;


    public function __construct()
    {
        $this->groupeJDRs = new ArrayCollection();
        $this->joinedGroupeJDRs = new ArrayCollection();
        $this->invitations = new ArrayCollection();
        $this->notificationHistories = new ArrayCollection();
        $this->invitationPending = new ArrayCollection();
        $this->playerMemberships = new ArrayCollection();
        $this->notifications = new ArrayCollection();
        $this->favoriteGroupeJDR = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): static
    {
        $this->bio = $bio;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return Collection<int, GroupeJDR>
     */
    public function getGroupeJDRs(): Collection
    {
        return $this->groupeJDRs;
    }

    public function addGroupeJDR(GroupeJDR $groupeJDR): static
    {
        if (!$this->groupeJDRs->contains($groupeJDR)) {
            $this->groupeJDRs->add($groupeJDR);
            $groupeJDR->setOwner($this);
        }

        return $this;
    }

    public function removeGroupeJDR(GroupeJDR $groupeJDR): static
    {
        if ($this->groupeJDRs->removeElement($groupeJDR)) {
            // set the owning side to null (unless already changed)
            if ($groupeJDR->getOwner() === $this) {
                $groupeJDR->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GroupeJDR>
     */
    public function getJoinedGroupeJDRs(): Collection
    {
        return $this->joinedGroupeJDRs;
    }

    public function joinGroupeJDR(GroupeJDR $groupeJDR): static
    {
        if (!$this->joinedGroupeJDRs->contains($groupeJDR)) {
            $this->joinedGroupeJDRs->add($groupeJDR);
        }

        return $this;
    }

    public function leaveGroupeJDR(GroupeJDR $groupeJDR): static
    {
        $this->joinedGroupeJDRs->removeElement($groupeJDR);

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
            $invitation->setUser($this);
        }

        return $this;
    }

    public function removeInvitation(Invitation $invitation): static
    {
        if ($this->invitations->removeElement($invitation)) {
            // set the owning side to null (unless already changed)
            if ($invitation->getUser() === $this) {
                $invitation->setUser(null);
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
            $notificationHistory->setUser($this);
        }

        return $this;
    }

    public function removeNotificationHistory(NotificationHistory $notificationHistory): static
    {
        if ($this->notificationHistories->removeElement($notificationHistory)) {
            // set the owning side to null (unless already changed)
            if ($notificationHistory->getUser() === $this) {
                $notificationHistory->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Invitation>
     */
    public function getInvitationPending(): Collection
    {
        return $this->invitationPending;
    }

    public function addInvitationPending(Invitation $invitationPending): static
    {
        if (!$this->invitationPending->contains($invitationPending)) {
            $this->invitationPending->add($invitationPending);
            $invitationPending->setRequestedBy($this);
        }

        return $this;
    }

    public function removeInvitationPending(Invitation $invitationPending): static
    {
        if ($this->invitationPending->removeElement($invitationPending)) {
            // set the owning side to null (unless already changed)
            if ($invitationPending->getRequestedBy() === $this) {
                $invitationPending->setRequestedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PlayerMembership>
     */
    public function getPlayerMemberships(): Collection
    {
        return $this->playerMemberships;
    }

    public function addPlayerMembership(PlayerMembership $playerMembership): static
    {
        if (!$this->playerMemberships->contains($playerMembership)) {
            $this->playerMemberships->add($playerMembership);
            $playerMembership->setPlayer($this);
        }

        return $this;
    }

    public function removePlayerMembership(PlayerMembership $playerMembership): static
    {
        if ($this->playerMemberships->removeElement($playerMembership)) {
            // set the owning side to null (unless already changed)
            if ($playerMembership->getPlayer() === $this) {
                $playerMembership->setPlayer(null);
            }
        }

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(?string $competence): static
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * @return Collection<int, Notification>
     */
    public function getNotifications(): Collection
    {
        return $this->notifications;
    }

    public function addNotification(Notification $notification): static
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications->add($notification);
            $notification->setRecipient($this);
        }

        return $this;
    }

    public function removeNotification(Notification $notification): static
    {
        if ($this->notifications->removeElement($notification)) {
            // set the owning side to null (unless already changed)
            if ($notification->getRecipient() === $this) {
                $notification->setRecipient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GroupeJDR>
     */
    public function getFavoriteGroupeJDR(): Collection
    {
        return $this->favoriteGroupeJDR;
    }

    public function addFavoriteGroupeJDR(GroupeJDR $favoriteGroupeJDR): static
    {
        if (!$this->favoriteGroupeJDR->contains($favoriteGroupeJDR)) {
            $this->favoriteGroupeJDR->add($favoriteGroupeJDR);
        }

        return $this;
    }

    public function removeFavoriteGroupeJDR(GroupeJDR $favoriteGroupeJDR): static
    {
        $this->favoriteGroupeJDR->removeElement($favoriteGroupeJDR);

        return $this;
    }

    public function getIsVip(): bool
    {
        return $this->isVip;
    }

    public function setIsVip(bool $isVip): self
    {
        $this->isVip = $isVip;

        return $this;
    }
}

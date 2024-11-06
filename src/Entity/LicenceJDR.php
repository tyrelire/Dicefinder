<?php

namespace App\Entity;

use App\Repository\LicenceJDRRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LicenceJDRRepository::class)]
class LicenceJDR
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $publisher = null;

    #[ORM\ManyToOne(inversedBy: 'licenceJDRs')]
    private ?Category $genre = null;

    #[ORM\Column]
    private ?int $releaseYear = null;

    /**
     * @var Collection<int, GroupeJDR>
     */
    #[ORM\OneToMany(targetEntity: GroupeJDR::class, mappedBy: 'licence')]
    private Collection $groupeJDRs;

    public function __construct()
    {
        $this->groupeJDRs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): static
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getGenre(): ?Category
    {
        return $this->genre;
    }

    public function setGenre(?Category $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getReleaseYear(): ?int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): static
    {
        $this->releaseYear = $releaseYear;

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
            $groupeJDR->setLicence($this);
        }

        return $this;
    }

    public function removeGroupeJDR(GroupeJDR $groupeJDR): static
    {
        if ($this->groupeJDRs->removeElement($groupeJDR)) {
            // set the owning side to null (unless already changed)
            if ($groupeJDR->getLicence() === $this) {
                $groupeJDR->setLicence(null);
            }
        }

        return $this;
    }
}

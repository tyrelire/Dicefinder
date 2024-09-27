<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, GroupeJDR>
     */
    #[ORM\ManyToMany(targetEntity: GroupeJDR::class, mappedBy: 'categories')]
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
            $groupeJDR->addCategory($this);
        }

        return $this;
    }

    public function removeGroupeJDR(GroupeJDR $groupeJDR): static
    {
        if ($this->groupeJDRs->removeElement($groupeJDR)) {
            $groupeJDR->removeCategory($this);
        }

        return $this;
    }
}

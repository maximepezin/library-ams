<?php
// src/Entity/LibraryBranch.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LibraryBranchRepository")
 * @ORM\Table(name="library_branch")
 */
class LibraryBranch
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(name="telephone_number", type="string", length=10)
     */
    private $telephoneNumber;

    /**
     * @ORM\Column(name="open_date", type="date")
     */
    private $openDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BranchHour", mappedBy="libraryBranch", orphanRemoval=true)
     */
    private $branchHours;

    public function __construct()
    {
        $this->branchHours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getTelephoneNumber(): ?string
    {
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber(string $telephoneNumber): self
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    public function getOpenDate(): ?\DateTimeInterface
    {
        return $this->openDate;
    }

    public function setOpenDate(\DateTimeInterface $openDate): self
    {
        $this->openDate = $openDate;

        return $this;
    }

    /**
     * @return Collection|BranchHour[]
     */
    public function getBranchHours(): Collection
    {
        return $this->branchHours;
    }

    public function addBranchHour(BranchHour $branchHour): self
    {
        if (!$this->branchHours->contains($branchHour)) {
            $this->branchHours[] = $branchHour;

            $branchHour->setLibraryBranch($this);
        }

        return $this;
    }

    public function removeBranchHour(BranchHour $branchHour): self
    {
        if ($this->branchHours->contains($branchHour)) {
            $this->branchHours->removeElement($branchHour);

            // set the owning side to null (unless already changed)
            if ($branchHour->getLibraryBranch() === $this) {
                $branchHour->setLibraryBranch(null);
            }
        }

        return $this;
    }
}

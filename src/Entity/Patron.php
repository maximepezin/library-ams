<?php
// src/Entity/Patron.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatronRepository")
 * @ORM\Table(name="patron")
 */
class Patron
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(name="telephone_number", type="string", length=10)
     */
    private $telephoneNumber;

    /**
     * @ORM\Column(name="birth_date", type="date")
     */
    private $birthDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LibraryBranch")
     * @ORM\JoinColumn(nullable=false)
     */
    private $homeLibraryBranch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

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

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getHomeLibraryBranch(): ?LibraryBranch
    {
        return $this->homeLibraryBranch;
    }

    public function setHomeLibraryBranch(LibraryBranch $homeLibraryBranch): self
    {
        $this->homeLibraryBranch = $homeLibraryBranch;

        return $this;
    }
}

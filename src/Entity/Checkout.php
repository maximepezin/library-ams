<?php
// src/Entity/Checkout.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CheckoutRepository")
 * @ORM\Table(name="checkout")
 */
class Checkout
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="since", type="datetime")
     */
    private $since;

    /**
     * @ORM\Column(name="until", type="datetime")
     */
    private $until;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LibraryAsset", inversedBy="checkouts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $libraryAsset;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LibraryCard")
     */
    private $libraryCard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSince(): ?\DateTimeInterface
    {
        return $this->since;
    }

    public function setSince(\DateTimeInterface $since): self
    {
        $this->since = $since;

        return $this;
    }

    public function getUntil(): ?\DateTimeInterface
    {
        return $this->until;
    }

    public function setUntil(\DateTimeInterface $until): self
    {
        $this->until = $until;

        return $this;
    }

    public function getLibraryAsset(): ?LibraryAsset
    {
        return $this->libraryAsset;
    }

    public function setLibraryAsset(LibraryAsset $libraryAsset): self
    {
        $this->libraryAsset = $libraryAsset;

        return $this;
    }

    public function getLibraryCard(): ?LibraryCard
    {
        return $this->libraryCard;
    }

    public function setLibraryCard(?LibraryCard $libraryCard = null): self
    {
        $this->libraryCard = $libraryCard;

        return $this;
    }
}

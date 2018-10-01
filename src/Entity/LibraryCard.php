<?php
// src/Entity/LibraryCard.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LibraryCardRepository")
 * @ORM\Table(name="library_card")
 */
class LibraryCard
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="fees", type="decimal", precision=5, scale=2)
     */
    private $fees;

    /**
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFees()
    {
        return $this->fees;
    }

    public function setFees($fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }
}

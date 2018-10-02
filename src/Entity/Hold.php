<?php
// src/Entity/Hold.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HoldRepository")
 * @ORM\Table(name="hold")
 */
class Hold
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="hold_placed", type="datetime")
     */
    private $holdPlaced;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoldPlaced(): ?\DateTimeInterface
    {
        return $this->holdPlaced;
    }

    public function setHoldPlaced(\DateTimeInterface $holdPlaced): self
    {
        $this->holdPlaced = $holdPlaced;

        return $this;
    }
}

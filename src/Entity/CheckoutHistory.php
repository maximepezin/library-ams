<?php
// src/Entity/CheckoutHistory.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CheckoutHistoryRepository")
 * @ORM\Table(name="checkout_history")
 */
class CheckoutHistory
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="checked_out", type="datetime")
     */
    private $checkedOut;

    /**
     * @ORM\Column(name="checked_in", type="datetime", nullable=true)
     */
    private $checkedIn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCheckedOut(): ?\DateTimeInterface
    {
        return $this->checkedOut;
    }

    public function setCheckedOut(\DateTimeInterface $checkedOut): self
    {
        $this->checkedOut = $checkedOut;

        return $this;
    }

    public function getCheckedIn(): ?\DateTimeInterface
    {
        return $this->checkedIn;
    }

    public function setCheckedIn(?\DateTimeInterface $checkedIn = null): self
    {
        $this->checkedIn = $checkedIn;

        return $this;
    }
}

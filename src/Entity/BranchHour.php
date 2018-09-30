<?php
// src/Entity/BranchHour.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BranchHourRepository")
 * @ORM\Table(name="branch_hour")
 */
class BranchHour
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="day_of_week", type="integer")
     */
    private $dayOfWeek;

    /**
     * @ORM\Column(name="open_time", type="time")
     */
    private $openTime;

    /**
     * @ORM\Column(name="close_time", type="time")
     */
    private $closeTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LibraryBranch", inversedBy="branchHours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $libraryBranch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfWeek(): ?int
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(int $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getOpenTime(): ?\DateTimeInterface
    {
        return $this->openTime;
    }

    public function setOpenTime(\DateTimeInterface $openTime): self
    {
        $this->openTime = $openTime;

        return $this;
    }

    public function getCloseTime(): ?\DateTimeInterface
    {
        return $this->closeTime;
    }

    public function setCloseTime(\DateTimeInterface $closeTime): self
    {
        $this->closeTime = $closeTime;

        return $this;
    }

    public function getLibraryBranch(): ?LibraryBranch
    {
        return $this->libraryBranch;
    }

    public function setLibraryBranch(LibraryBranch $libraryBranch): self
    {
        $this->libraryBranch = $libraryBranch;

        return $this;
    }
}

<?php
// src/Entity/LibraryAsset.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LibraryAssetRepository")
 * @ORM\Table(name="library_asset")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *     Book::BOOK_DISCRIMINATOR = Book::class,
 *     Video::VIDEO_DISCRIMINATOR = Video::class,
 * })
 */
abstract class LibraryAsset {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(name="published_year", type="integer")
     */
    private $publishedYear;

    /**
     * @ORM\Column(name="cost", type="decimal", precision=5, scale=2)
     */
    private $cost;

    /**
     * @ORM\Column(name="number_of_copies", type="integer")
     */
    private $numberOfCopies;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Status")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Checkout", mappedBy="libraryAsset", orphanRemoval=true)
     */
    private $checkouts;

    public function __construct()
    {
        $this->checkouts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPublishedYear(): ?int
    {
        return $this->publishedYear;
    }

    public function setPublishedYear(int $publishedYear): self
    {
        $this->publishedYear = $publishedYear;

        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function setNumberOfCopies(int $numberOfCopies): self
    {
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|Checkout[]
     */
    public function getCheckouts(): Collection
    {
        return $this->checkouts;
    }

    public function addCheckout(Checkout $checkout): self
    {
        if (!$this->checkouts->contains($checkout)) {
            $this->checkouts[] = $checkout;

            $checkout->setLibraryAsset($this);
        }

        return $this;
    }

    public function removeCheckout(Checkout $checkout): self
    {
        if ($this->checkouts->contains($checkout)) {
            $this->checkouts->removeElement($checkout);

            // set the owning side to null (unless already changed)
            if ($checkout->getLibraryAsset() === $this) {
                $checkout->setLibraryAsset(null);
            }
        }

        return $this;
    }
}

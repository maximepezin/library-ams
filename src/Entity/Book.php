<?php
// src/Entity/Book.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 * @ORM\Table(name="book")
 */
class Book extends LibraryAsset
{
    public const BOOK_DISCRIMINATOR = 'book';

    /**
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(name="isbn", type="string", length=13)
     */
    private $isbn;

    /**
     * @ORM\Column(name="dewey_index", type="string", length=7)
     */
    private $deweyIndex;

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getDeweyIndex(): ?string
    {
        return $this->deweyIndex;
    }

    public function setDeweyIndex(string $deweyIndex): self
    {
        $this->deweyIndex = $deweyIndex;

        return $this;
    }
}

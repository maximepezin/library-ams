<?php
// src/Entity/Video.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 * @ORM\Table(name="video")
 */
class Video extends LibraryAsset
{
    public const VIDEO_DISCRIMINATOR = 'video';

    /**
     * @ORM\Column(name="director", type="string", length=255)
     */
    private $director;

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }
}

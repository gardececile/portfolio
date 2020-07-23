<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfileRepository::class)
 */
class Profile
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $contentTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $contentDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    public function setContentTitle(string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    public function getContentDescription(): ?string
    {
        return $this->contentDescription;
    }

    public function setContentDescription(string $contentDescription): self
    {
        $this->contentDescription = $contentDescription;

        return $this;
    }
}

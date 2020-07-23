<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mywork;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datebeginning;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateend;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $learningdescription;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $drawing;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMywork(): ?string
    {
        return $this->mywork;
    }

    public function setMywork(?string $mywork): self
    {
        $this->mywork = $mywork;

        return $this;
    }

    public function getDatebeginning(): ?\DateTimeInterface
    {
        return $this->datebeginning;
    }

    public function setDatebeginning(?\DateTimeInterface $datebeginning): self
    {
        $this->datebeginning = $datebeginning;

        return $this;
    }

    public function getDateend(): ?\DateTimeInterface
    {
        return $this->dateend;
    }

    public function setDateend(?\DateTimeInterface $dateend): self
    {
        $this->dateend = $dateend;

        return $this;
    }

    public function getLearningdescription(): ?string
    {
        return $this->learningdescription;
    }

    public function setLearningdescription(?string $learningdescription): self
    {
        $this->learningdescription = $learningdescription;

        return $this;
    }

    public function getDrawing(): ?string
    {
        return $this->drawing;
    }

    public function setDrawing(?string $drawing): self
    {
        $this->drawing = $drawing;

        return $this;
    }
}

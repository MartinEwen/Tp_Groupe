<?php

namespace App\Entity;

use App\Repository\PagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagesRepository::class)]
class Pages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $creation = null;

    #[ORM\Column(length: 255)]
    private ?string $summary = null;

    #[ORM\Column(length: 255)]
    private ?string $titlePage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePages = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreation(): ?\DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(\DateTimeInterface $creation): self
    {
        $this->creation = $creation;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getTitlePage(): ?string
    {
        return $this->titlePage;
    }

    public function setTitlePage(string $titlePage): self
    {
        $this->titlePage = $titlePage;

        return $this;
    }

    public function getImagePages(): ?string
    {
        return $this->imagePages;
    }

    public function setImagePages(?string $imagePages): self
    {
        $this->imagePages = $imagePages;

        return $this;
    }
}

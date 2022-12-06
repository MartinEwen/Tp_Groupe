<?php

namespace App\Entity;

use App\Entity\Contents;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PagesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

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

    #[ORM\ManyToOne(inversedBy: 'pages')]
    private ?Categories $category = null;

    #[ORM\OneToMany(mappedBy: 'page', targetEntity: Contents::class)]
    private Collection $contents;

    public function __construct()
    {
        $this->contents = new ArrayCollection();
    }

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

    public function getCategory(): ?categories
    {
        return $this->category;
    }

    public function setCategory(?categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Contents>
     */
    public function getContents(): Collection
    {
        return $this->contents;
    }

    public function addContent(Contents $content): self
    {
        if (!$this->contents->contains($content)) {
            $this->contents->add($content);
            $content->setPage($this);
        }

        return $this;
    }

    public function removeContent(Contents $content): self
    {
        if ($this->contents->removeElement($content)) {
            // set the owning side to null (unless already changed)
            if ($content->getPage() === $this) {
                $content->setPage(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nameImage = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Contents $content = null;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: Contents::class)]
    private Collection $contents;

    public function __construct()
    {
        $this->contents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameImage(): ?string
    {
        return $this->nameImage;
    }

    public function setNameImage(string $nameImage): self
    {
        $this->nameImage = $nameImage;

        return $this;
    }

    public function getContent(): ?contents
    {
        return $this->content;
    }

    public function setContent(?contents $content): self
    {
        $this->content = $content;

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
            $content->setImage($this);
        }

        return $this;
    }

    public function removeContent(Contents $content): self
    {
        if ($this->contents->removeElement($content)) {
            // set the owning side to null (unless already changed)
            if ($content->getImage() === $this) {
                $content->setImage(null);
            }
        }

        return $this;
    }
}

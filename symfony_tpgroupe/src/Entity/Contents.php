<?php

namespace App\Entity;

use App\Repository\ContentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContentsRepository::class)]
class Contents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titleContent = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?int $fileOrder = null;

    #[ORM\ManyToOne(inversedBy: 'contents')]
    private ?Pages $page = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleContent(): ?string
    {
        return $this->titleContent;
    }

    public function setTitleContent(string $titleContent): self
    {
        $this->titleContent = $titleContent;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getFileOrder(): ?int
    {
        return $this->fileOrder;
    }

    public function setFileOrder(int $fileOrder): self
    {
        $this->fileOrder = $fileOrder;

        return $this;
    }

    public function getPage(): ?pages
    {
        return $this->page;
    }

    public function setPage(?pages $page): self
    {
        $this->page = $page;

        return $this;
    }
}

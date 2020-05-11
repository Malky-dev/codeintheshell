<?php

namespace App\Entity;

use App\Repository\AnswerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnswerRepository::class)
 */
class Answer
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
    private $ganswer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banswer1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banswer2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banswer3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGanswer(): ?string
    {
        return $this->ganswer;
    }

    public function setGanswer(string $ganswer): self
    {
        $this->ganswer = $ganswer;

        return $this;
    }

    public function getBanswer1(): ?string
    {
        return $this->banswer1;
    }

    public function setBanswer1(string $banswer1): self
    {
        $this->banswer1 = $banswer1;

        return $this;
    }

    public function getBanswer2(): ?string
    {
        return $this->banswer2;
    }

    public function setBanswer2(string $banswer2): self
    {
        $this->banswer2 = $banswer2;

        return $this;
    }

    public function getBanswer3(): ?string
    {
        return $this->banswer3;
    }

    public function setBanswer3(string $banswer3): self
    {
        $this->banswer3 = $banswer3;

        return $this;
    }
}

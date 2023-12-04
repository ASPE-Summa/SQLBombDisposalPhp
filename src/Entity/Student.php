<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $grade = null;

    #[ORM\Column]
    private ?int $mathScore = null;

    #[ORM\Column]
    private ?int $englishScore = null;

    #[ORM\Column]
    private ?int $historyScore = null;

    #[ORM\Column]
    private ?int $geographyScore = null;

    #[ORM\Column]
    private ?int $scienceScore = null;

    #[ORM\Column]
    private ?int $artScore = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): static
    {
        $this->grade = $grade;

        return $this;
    }

    public function getMathScore(): ?int
    {
        return $this->mathScore;
    }

    public function setMathScore(int $mathScore): static
    {
        $this->mathScore = $mathScore;

        return $this;
    }

    public function getEnglishScore(): ?int
    {
        return $this->englishScore;
    }

    public function setEnglishScore(int $englishScore): static
    {
        $this->englishScore = $englishScore;

        return $this;
    }

    public function getHistoryScore(): ?int
    {
        return $this->historyScore;
    }

    public function setHistoryScore(int $historyScore): static
    {
        $this->historyScore = $historyScore;

        return $this;
    }

    public function getGeographyScore(): ?int
    {
        return $this->geographyScore;
    }

    public function setGeographyScore(int $geographyScore): static
    {
        $this->geographyScore = $geographyScore;

        return $this;
    }

    public function getScienceScore(): ?int
    {
        return $this->scienceScore;
    }

    public function setScienceScore(int $scienceScore): static
    {
        $this->scienceScore = $scienceScore;

        return $this;
    }

    public function getArtScore(): ?int
    {
        return $this->artScore;
    }

    public function setArtScore(int $artScore): static
    {
        $this->artScore = $artScore;

        return $this;
    }
}

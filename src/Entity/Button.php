<?php

namespace App\Entity;

use App\Repository\ButtonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ButtonRepository::class)]
class Button
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $name = null;

    #[ORM\OneToOne(mappedBy: 'button', targetEntity: ButtonVoltage::class)]
    public ButtonVoltage|null $buttonVoltage = null;

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

    public function getButtonVoltage(): ?ButtonVoltage
    {
        return $this->buttonVoltage;
    }

    public function setButtonVoltage(?ButtonVoltage $buttonVoltage): static
    {
        $this->buttonVoltage = $buttonVoltage;

        return $this;
    }
}

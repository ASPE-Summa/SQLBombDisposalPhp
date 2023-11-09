<?php

namespace App\Entity;

use App\Repository\ButtonVoltageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ButtonVoltageRepository::class)]
class ButtonVoltage
{
    #[ORM\Id]
    #[ORM\OneToOne(inversedBy: 'buttonVoltage', targetEntity: Button::class)]
    #[ORM\JoinColumn(name: 'buttonId', referencedColumnName: 'id')]
    private Button|null $button = null;

    #[ORM\Column]
    private ?int $voltage = null;

    public function getButtonId(): ?int
    {
        return $this->buttonId;
    }

    public function setButtonId(int $buttonId): static
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    public function getVoltage(): ?int
    {
        return $this->voltage;
    }

    public function setVoltage(int $voltage): static
    {
        $this->voltage = $voltage;

        return $this;
    }
}

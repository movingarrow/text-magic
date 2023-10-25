<?php

namespace App\Entity;

use App\Repository\FormResultsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormResultsRepository::class)]
class FormResults
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $correctAnswers = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $incorrectAnswers = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorrectAnswers(): array
    {
        return $this->correctAnswers;
    }

    public function setCorrectAnswers(array $correctAnswers): static
    {
        $this->correctAnswers = $correctAnswers;

        return $this;
    }

    public function getIncorrectAnswers(): array
    {
        return $this->incorrectAnswers;
    }

    public function setIncorrectAnswers(array $incorrectAnswers): static
    {
        $this->incorrectAnswers = $incorrectAnswers;

        return $this;
    }
}

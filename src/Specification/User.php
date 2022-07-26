<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

use DateTime;

class User
{
    private string $name;
    private DateTime $dateOfBirth;
    private float $height;

    private function __construct(string $name, DateTime $dateOfBirth, float $height)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->height = $height;
    }

    public static function create(string $name, DateTime $dateOfBirth, float $height): self
    {
        return new self($name, $dateOfBirth, $height);
    }

    public function name(): string
    {
        return $this->name;
    }

    public function dateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    public function height(): float
    {
        return $this->height;
    }
}

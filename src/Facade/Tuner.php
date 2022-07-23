<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class Tuner
{
    private string $description;
    private Amplifier $amplifier;
    private float $frequency = 0.0;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function setFrequency(float $frequency): void
    {
        echo sprintf("%s setting frequency to to %f\n", $this->description, $frequency);

        $this->frequency = $frequency;
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function off(): void
    {
        echo $this->description.' off'."\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

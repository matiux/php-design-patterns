<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class Tuner
{
    private $description;
    private $amplifier;
    private $frequency;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function setFrequency(float $frequency)
    {
        echo sprintf("%s setting frequency to to %f\n", $this->description, $frequency);
        $this->frequency = $frequency;
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function off()
    {
        echo $this->description.' off'."\n";
    }

    public function __toString()
    {
        return $this->description;
    }
}

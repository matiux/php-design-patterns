<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Receiver;

class CeilingFan
{
    public const HIGH = 2;
    public const MEDIUM = 1;
    public const LOW = 0;
    public const OFF = 0;

    private $location;
    private $speed;

    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        // turns the ceiling fan on to high
        $this->speed = self::HIGH;
        echo $this->location.' ceiling fan is on high'."\n";
    }

    public function medium(): void
    {
        // turns the ceiling fan on to medium
        $this->speed = self::MEDIUM;
        echo $this->location.' ceiling fan is on medium'."\n";
    }

    public function low(): void
    {
        // turns the ceiling fan on to low
        $this->speed = self::LOW;
        echo $this->location.' ceiling fan is on low'."\n";
    }

    public function off(): void
    {
        // turns the ceiling fan off
        $this->speed = self::OFF;
        echo $this->location.' ceiling fan is off'."\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}

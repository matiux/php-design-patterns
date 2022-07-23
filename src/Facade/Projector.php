<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class Projector
{
    private string $description;
    private DvdPlayer $dvdPlayer;

    public function __construct(string $description, DvdPlayer $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function off(): void
    {
        echo $this->description.' off'."\n";
    }

    public function wideScreenMode(): void
    {
        echo $this->description.' in widescreen mode (16x9 aspect ratio)'."\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

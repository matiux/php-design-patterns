<?php

namespace DesignPatterns\Facade;

class Projector
{
    private $description;
    private $dvdPlayer;

    public function __construct(string $description, DvdPlayer $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on(): void
    {
        echo $this->description . ' on' . "\n";
    }

    public function off()
    {
        echo $this->description . ' off' . "\n";
    }

    public function wideScreenMode()
    {
        echo $this->description . ' in widescreen mode (16x9 aspect ratio)' . "\n";
    }

    public function __toString()
    {
        return $this->description;
    }
}

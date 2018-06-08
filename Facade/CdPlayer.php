<?php

namespace DesignPatterns\Facade;

class CdPlayer
{
    private $description;
    private $currentTrack;
    private $amplifier;
    private $title;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on(): void
    {
        echo $this->description . ' on' . "\n";
    }

    public function play(string $title): void
    {
        $this->title = $title;
        $this->currentTrack = 0;
        echo sprintf("%s playing \"%s\"\n", $this->description, $this->title);
    }

    public function eject(): void
    {
        $this->title = null;

        echo $this->description . ' eject' . "\n";
    }

    public function off(): void
    {
        echo $this->description . ' off' . "\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

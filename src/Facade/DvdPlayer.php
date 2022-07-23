<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class DvdPlayer
{
    private $description;
    private $currentTrack;
    private $amplifier;
    private $movie;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function play(string $movie)
    {
        $this->movie = $movie;
        $this->currentTrack = 0;
        echo sprintf("%s playing \"%s\"\n", $this->description, $this->movie);
    }

    public function stop()
    {
        $this->currentTrack = 0;
        echo sprintf("%s stopped \"%s\"\n", $this->description, $this->movie);
    }

    public function eject()
    {
        $this->movie = null;
        echo $this->description.' eject'."\n";
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

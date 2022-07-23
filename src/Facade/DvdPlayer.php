<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class DvdPlayer
{
    private string $description;
    private int $currentTrack;
    private Amplifier $amplifier;
    private ?string $movie;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function play(string $movie): void
    {
        $this->movie = $movie;
        $this->currentTrack = 0;
        echo sprintf("%s playing \"%s\"\n", $this->description, $this->movie);
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        echo sprintf("%s stopped \"%s\"\n", $this->description, (string) $this->movie);
    }

    public function eject(): void
    {
        $this->movie = null;

        echo $this->description.' eject'."\n";
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

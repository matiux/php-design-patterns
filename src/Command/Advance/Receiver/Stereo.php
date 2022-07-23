<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Receiver;

class Stereo
{
    private string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function off(): void
    {
        echo $this->location.' Stereo is off'."\n";
    }

    public function on(): void
    {
        echo $this->location.' Stereo is on'."\n";
    }

    public function setCD(): void
    {
        echo $this->location.' Stereo is set for CD input'."\n";
    }

    public function setDVD(): void
    {
        echo $this->location.' Stereo is set for DVD input'."\n";
    }

    public function setRadio(): void
    {
        echo $this->location.' Stereo is set for DVD input'."\n";
    }

    public function setVolume(int $volume): void
    {
        // code to set the volume
        // valid range: 1-11 (after all 11 is better than 10, right?)
        echo $this->location.' Stereo volume set to '.$volume."\n";
    }
}

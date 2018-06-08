<?php

namespace DesignPatterns\Facade;

class Amplifier
{
    private $description;
    private $tuner;
    private $dvd;
    private $cd;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function on(): void
    {
        echo $this->description . ' on' . "\n";
    }

    public function setDvd(DvdPlayer $dvd): void
    {
        echo sprintf("%s setting DVD player to %s\n", $this->description, (string)$dvd);
        $this->dvd = $dvd;
    }

    public function setSurroundSound(): void
    {
        echo sprintf("%s surround sound on (5 speakers, 1 subwoofer)\n", $this->description);
    }

    public function setVolume(int $level): void
    {
        echo sprintf("%s setting volume to %d\n", $this->description, $level);
    }

    public function off(): void
    {
        echo $this->description . ' off' . "\n";
    }

    public function setCd(CdPlayer $cd): void
    {
        echo sprintf("%s setting CD player to %s\n", $this->description, (string)$cd);
        $this->cd = $cd;
    }

    public function setStereoSound(): void
    {
        echo $this->description . ' stereo mode on' . "\n";
    }

    public function setTuner(Tuner $tuner): void
    {
        echo sprintf("%s setting tuner to %s\n", $this->description, (string)$tuner);
        $this->tuner = $tuner;
    }
}

<?php

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\Stereo;

class StereoOffCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}

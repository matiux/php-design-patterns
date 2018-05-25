<?php

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\Stereo;

class StereoOnWithCDCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Command;

use DesignPatterns\Command\Advance\Receiver\Stereo;

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
}

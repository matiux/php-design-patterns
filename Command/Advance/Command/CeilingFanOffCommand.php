<?php

namespace DesignPatterns\Command\Advance\Command;

use DesignPatterns\Command\Advance\Receiver\CeilingFan;

class CeilingFanOffCommand implements Command
{
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->off();
    }
}

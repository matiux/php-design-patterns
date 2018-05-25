<?php

namespace DesignPatterns\Command\Advance\Command;

use DesignPatterns\Command\Advance\Receiver\GarageDoor;

class GarageDoorDownCommand implements Command
{
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->down();
    }
}

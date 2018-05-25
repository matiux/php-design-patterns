<?php

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\GarageDoor;

class GarageDoorUpCommand implements Command
{
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }

    public function undo(): void
    {
        $this->garageDoor->down();
    }
}

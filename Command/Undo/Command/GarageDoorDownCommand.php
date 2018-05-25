<?php

namespace DesignPatterns\Command\Undo\Command;

use DesignPatterns\Command\Undo\Receiver\GarageDoor;

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

    public function undo(): void
    {
        $this->garageDoor->up();
    }
}

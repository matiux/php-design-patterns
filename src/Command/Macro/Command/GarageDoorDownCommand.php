<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\GarageDoor;

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

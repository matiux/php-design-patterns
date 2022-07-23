<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Command;

use DesignPatterns\Command\Advance\Receiver\GarageDoor;

class GarageDoorUpCommand implements Command
{
    private GarageDoor $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }
}

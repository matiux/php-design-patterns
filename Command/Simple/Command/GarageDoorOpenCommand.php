<?php

namespace DesignPatterns\Command\Simple\Command;

use DesignPatterns\Command\Simple\Receiver\GarageDoor;

class GarageDoorOpenCommand implements Command
{
    /**
     * Il receiver
     *
     * @var GarageDoor
     */
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->open();
    }
}

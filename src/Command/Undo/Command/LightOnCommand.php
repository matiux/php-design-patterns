<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Undo\Command;

use DesignPatterns\Command\Undo\Receiver\Light;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}

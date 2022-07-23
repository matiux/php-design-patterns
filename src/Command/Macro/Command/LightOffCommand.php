<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\Light;

class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}

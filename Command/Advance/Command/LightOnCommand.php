<?php

namespace DesignPatterns\Command\Advance\Command;

use DesignPatterns\Command\Advance\Receiver\Light;

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
}

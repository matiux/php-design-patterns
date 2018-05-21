<?php

namespace DesignPatterns\Command\Command;

use DesignPatterns\Command\Receiver\Light;

class LightOnCommand implements Command
{
    /**
     * Il receiver
     *
     * @var Light
     */
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

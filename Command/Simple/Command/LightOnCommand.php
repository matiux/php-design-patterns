<?php

namespace DesignPatterns\Command\Simple\Command;

use DesignPatterns\Command\Simple\Receiver\Light;

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

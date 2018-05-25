<?php

namespace DesignPatterns\Command\Simple;

use DesignPatterns\Command\Simple\Command\Command;

class SimpleRemoteControl
{
    /**
     * Invoker
     *
     * @var Command
     */
    private $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}

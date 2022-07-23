<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Command;

class MacroCommand implements Command
{
    private $commands;

    public function __construct(Commands $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        for ($i = 0; $i < $this->commands->length(); ++$i) {
            $this->commands->get($i)->execute();
        }
    }

    public function undo(): void
    {
        for ($i = $this->commands->length() - 1; $i >= 0; --$i) {
            $this->commands->get($i)->undo();
        }
    }
}

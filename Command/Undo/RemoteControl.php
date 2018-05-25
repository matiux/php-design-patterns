<?php

namespace DesignPatterns\Command\Undo;

use DesignPatterns\Command\Undo\Command\Command;
use DesignPatterns\Command\Undo\Command\Commands;
use DesignPatterns\Command\Undo\Command\NoCommand;

class RemoteControl
{
    /** @var Commands */
    private $onCommands;

    /** @var Commands */
    private $offCommands;

    /** @var Command */
    private $undoCommand;

    public function __construct()
    {
        $this->onCommands = new Commands();
        $this->offCommands = new Commands();

        $noCommand = new NoCommand();

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands->append($i, $noCommand);
            $this->offCommands->append($i, $noCommand);
        }

        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands->append($slot, $onCommand);
        $this->offCommands->append($slot, $offCommand);
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands->get($slot)->execute();

        $this->undoCommand = $this->onCommands->get($slot);
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands->get($slot)->execute();

        $this->undoCommand = $this->offCommands->get($slot);
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function __toString()
    {
        $output = sprintf("\n--------- Remote control ---------\n");

        for ($i = 0; $i < $this->onCommands->length(); $i++) {
            $output .= sprintf(
                "[slot %d] ON:%s - OFF: %s - UNDO:%s\n",
                $i,
                get_class($this->onCommands->get($i)),
                get_class($this->offCommands->get($i)),
                get_class($this->undoCommand)
            );
        }

        return $output;
    }
}

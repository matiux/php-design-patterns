<?php

namespace DesignPatterns\Command\Undo\Command;

class Commands
{
    private $commands;

    public function __construct()
    {
        $this->commands = new \ArrayObject();
    }

    public function append(int $offset, Command $command): void
    {
        $this->commands->offsetSet($offset, $command);
    }

    public function get(int $offset): Command
    {
        return $this->commands->offsetGet($offset);
    }

    public function length(): int
    {
        return $this->commands->count();
    }
}

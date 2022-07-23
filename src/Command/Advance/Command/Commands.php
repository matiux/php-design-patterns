<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Command;

use ArrayObject;

class Commands
{
    /** @var ArrayObject<int, Command> */
    private ArrayObject $commands;

    public function __construct()
    {
        /** @var ArrayObject<int, Command> */
        $this->commands = new ArrayObject();
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

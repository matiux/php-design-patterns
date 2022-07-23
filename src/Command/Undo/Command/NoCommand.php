<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Undo\Command;

class NoCommand implements Command
{
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}

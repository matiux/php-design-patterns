<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Command;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}

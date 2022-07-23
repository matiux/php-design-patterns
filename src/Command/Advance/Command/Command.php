<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Advance\Command;

interface Command
{
    public function execute(): void;
}

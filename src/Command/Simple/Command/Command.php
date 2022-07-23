<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Simple\Command;

interface Command
{
    public function execute(): void;
}

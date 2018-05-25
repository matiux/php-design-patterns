<?php

namespace DesignPatterns\Command\Macro\Command;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}

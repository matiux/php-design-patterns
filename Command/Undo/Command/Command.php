<?php

namespace DesignPatterns\Command\Undo\Command;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}

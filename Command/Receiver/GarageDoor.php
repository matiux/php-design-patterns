<?php

namespace DesignPatterns\Command\Receiver;

class GarageDoor
{
    public function open(): void
    {
        echo 'The garage door is open' . "\n";
    }
}

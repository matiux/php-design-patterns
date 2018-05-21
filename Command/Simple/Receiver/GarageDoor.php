<?php

namespace DesignPatterns\Command\Simple\Receiver;

class GarageDoor
{
    public function open(): void
    {
        echo 'The garage door is open' . "\n";
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Simple\Receiver;

class GarageDoor
{
    public function open(): void
    {
        echo 'The garage door is open'."\n";
    }
}

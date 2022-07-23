<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Simple\Receiver;

class Light
{
    public function off(): void
    {
        echo 'Light is off'."\n";
    }

    public function on(): void
    {
        echo 'Light is on'."\n";
    }
}

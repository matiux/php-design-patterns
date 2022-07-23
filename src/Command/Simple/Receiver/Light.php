<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Simple\Receiver;

class Light
{
    public function off()
    {
        echo 'Light is off'."\n";
    }

    public function on()
    {
        echo 'Light is on'."\n";
    }
}

<?php

namespace DesignPatterns\Command\Receiver;

class Light
{
    public function off()
    {
        echo 'The light has been turned off' . "\n";
    }

    public function on()
    {
        echo 'The light has been turned on' . "\n";
    }
}

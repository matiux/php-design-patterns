<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Undo\Receiver;

class Light
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function off()
    {
        echo $this->location.' Light is off'."\n";
    }

    public function on()
    {
        echo $this->location.' Light is on'."\n";
    }
}

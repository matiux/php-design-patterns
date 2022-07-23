<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Receiver;

class Light
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function off(): void
    {
        echo $this->location.' Light is off'."\n";
    }

    public function on(): void
    {
        echo $this->location.' Light is on'."\n";
    }
}

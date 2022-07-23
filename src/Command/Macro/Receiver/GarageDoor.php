<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Receiver;

class GarageDoor
{
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function up(): void
    {
        echo $this->location.' garage door is up'."\n";
    }

    public function down(): void
    {
        echo $this->location.' garage door is down'."\n";
    }

    public function stop(): void
    {
        echo $this->location.' garage door is stopped'."\n";
    }

    public function lightOn(): void
    {
        echo $this->location.' garage light is on'."\n";
    }

    public function lightOff(): void
    {
        echo $this->location.' garage light is off'."\n";
    }
}

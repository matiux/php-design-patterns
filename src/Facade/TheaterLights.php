<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class TheaterLights
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function dim(int $level): void
    {
        echo sprintf("%s dimming to %d%%\n", $this->description, $level);
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class PopcornPopper
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function pop(): void
    {
        echo $this->description.' popping popcorn!'."\n";
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function off(): void
    {
        echo $this->description.' off'."\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

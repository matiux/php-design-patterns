<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class PopcornPopper
{
    private $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function pop()
    {
        echo $this->description.' popping popcorn!'."\n";
    }

    public function on(): void
    {
        echo $this->description.' on'."\n";
    }

    public function off()
    {
        echo $this->description.' off'."\n";
    }

    public function __toString()
    {
        return $this->description;
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class Screen
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function down(): void
    {
        echo $this->description.' going down'."\n";
    }

    public function up(): void
    {
        echo $this->description.' going up'."\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator\Beverage;

abstract class Beverage
{
    public const SMALL = 0;
    public const MEDIUM = 1;
    public const BIG = 2;

    protected string $description = 'Undefined beverage';

    protected int $size = self::SMALL;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    abstract protected function setDescription(): void;

    abstract public function cost(): float;
}

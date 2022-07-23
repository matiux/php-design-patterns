<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator\Beverage;

abstract class Beverage
{
    public const PICCOLO = 0;
    public const MEDIO = 1;
    public const GRANDE = 2;

    protected $description = 'Bevanda non definita';

    protected $size = self::PICCOLO;

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

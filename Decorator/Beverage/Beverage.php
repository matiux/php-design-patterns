<?php

namespace DesignPatterns\Decorator\Beverage;

abstract class Beverage
{
    const PICCOLO = 0;
    const MEDIO = 1;
    const GRANDE = 2;

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

    protected abstract function setDescription(): void;

    public abstract function cost(): float;
}

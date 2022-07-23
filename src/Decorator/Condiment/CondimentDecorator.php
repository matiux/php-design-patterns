<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator\Condiment;

use DesignPatterns\Decorator\Beverage\Beverage;

abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;
    protected string $condimentDescription = 'Condimento sconosciuto';

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getSize(): int
    {
        return $this->beverage->getSize();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription()." {$this->condimentDescription}";
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator\Condiment;

use DesignPatterns\Decorator\Beverage\Beverage;

class ConCacao extends CondimentDecorator
{
    public function cost(): float
    {
        $cost = $this->beverage->cost();

        switch ($this->beverage->size) {
            case Beverage::PICCOLO:
                $cost += 0;

                break;
            case Beverage::MEDIO:
                $cost += 0.15;

                break;
            case Beverage::GRANDE:
                $cost += 0.20;

                break;
        }

        return $cost;
    }

    protected function setDescription(): void
    {
        $this->condimentDescription = 'con cacao';
    }
}

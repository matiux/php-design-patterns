<?php

namespace DesignPatterns\Decorator\Condiment;

use DesignPatterns\Decorator\Beverage\Beverage;

class SoyMilk extends CondimentDecorator
{
    public function cost(): float
    {
        $cost = $this->beverage->cost();

        switch ($this->beverage->size) {
            case Beverage::PICCOLO:
                $cost += 0.25;
                break;
            case Beverage::MEDIO:
                $cost += 0.5;
                break;
            case Beverage::GRANDE:
                $cost += 0.75;
                break;
        }

        return $cost;
    }

    protected function setDescription(): void
    {
        $this->condimentDescription = 'con latte di soia';
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator\Condiment;

use DesignPatterns\Decorator\Beverage\Beverage;

class SoyMilk extends CondimentDecorator
{
    public function cost(): float
    {
        $cost = $this->beverage->cost();

        switch ($this->beverage->size) {
            case Beverage::SMALL:
                $cost += 0.25;

                break;
            case Beverage::MEDIUM:
                $cost += 0.5;

                break;
            case Beverage::BIG:
                $cost += 0.75;

                break;
        }

        return $cost;
    }

    protected function setDescription(): void
    {
        $this->condimentDescription = 'with soy milk';
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\ItalianMargherita;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\ItalianMelanzane;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\PizzaStore;
use InvalidArgumentException;

class ItalianStylePizzaStore extends PizzaStore
{
    /**
     * Factory method.
     */
    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margherita':
                return new ItalianMargherita();
            case 'melanzane':
                return new ItalianMelanzane();
            default:
                throw new InvalidArgumentException();
        }
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianMargherita;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianEggplant;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\Pizza;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\PizzaStore;
use InvalidArgumentException;

class ItalianStylePizzaStore extends PizzaStore
{
    /**
     * Abstract Factory.
     *
     * @param string $type
     *
     * @return Pizza
     */
    protected function createPizza(string $type): Pizza
    {
        $pizzaIngredientFactory = new ItalianPizzaIngredientFactory();

        switch ($type) {
            case 'margherita':
                $pizza = new ItalianMargherita($pizzaIngredientFactory);
                $pizza->setName('Italian margherita pizza');

                break;
            case 'eggplant':
                $pizza = new ItalianEggplant($pizzaIngredientFactory);
                $pizza->setName('Pizza with eggplant');

                break;
            default:
                throw new InvalidArgumentException(sprintf('Invalid type: %s', $type));
        }

        return $pizza;
    }
}

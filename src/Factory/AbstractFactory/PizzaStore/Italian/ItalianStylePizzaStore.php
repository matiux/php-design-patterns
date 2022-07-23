<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianMargherita;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianMelanzane;
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
                $pizza->setName('Margherita Italiana');

                break;
            case 'melanzane':
                $pizza = new ItalianMelanzane($pizzaIngredientFactory);
                $pizza->setName('Pizza con melanzane');

                break;
            default:
                throw new InvalidArgumentException(sprintf('Invalid type: %s', $type));
        }

        return $pizza;
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\Pizza;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ItalianEggplant extends Pizza
{
    public function prepare(): void
    {
        echo "I prepare the pizza {$this->name}\n";
        echo "I prepare the ingredients:\n";

        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->eggplant = $this->pizzaIngredientFactory->createEggplant();

        echo "\t".$this->dough->getName()."\n";
        echo "\t".$this->sauce->getName()."\n";
        echo "\t".$this->cheese->getName()."\n";
        echo "\t".$this->eggplant->getName()."\n";
    }
}

<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\Pizza;

class ItalianMargherita extends Pizza
{
    public function prepare(): void
    {
        echo "Preparo la pizza {$this->name}\n";
        echo "Preparo gli ingredienti:\n";

        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->veggies = $this->pizzaIngredientFactory->createVeggies();

        echo "\t" . $this->dough->getName() . "\n";
        echo "\t" . $this->sauce->getName() . "\n";
        echo "\t" . $this->cheese->getName() . "\n";

        foreach ($this->veggies as $veggy) {

            echo "\t" . $veggy->getName() . "\n";
        }
    }
}

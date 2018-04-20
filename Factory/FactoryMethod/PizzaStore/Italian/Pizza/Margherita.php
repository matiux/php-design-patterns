<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\PizzaIngredientFactory;

class Margherita extends Pizza
{
    protected $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        parent::__construct();

        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparo la pizza {$this->name}\n";
        echo "Preparo gli ingredienti:\n";

        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->veggies = $this->pizzaIngredientFactory->createVeggies();

        echo "\t" . $this->dough->getName();
    }
}

<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Cheese;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Dough;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough; // Impasto

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): \ArrayObject;
}

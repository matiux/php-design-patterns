<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient;

use ArrayObject;

interface PizzaIngredientFactory
{
    public function createDough(): Dough; // Impasto

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createEggplant(): Eggplant;

    /**
     * @return ArrayObject<int, Veggie>
     */
    public function createVeggies(): ArrayObject;
}

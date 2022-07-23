<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Cheese;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Dough;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Eggplant;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\PizzaIngredientFactory;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Sauce;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Ingredient\Veggie;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\BasilicoVeggie;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\IntegraleDough;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\ItalianMelanzanaBio;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\MozzarellaDiBufalaCheese;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\OriganoVeggie;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Ingredient\PomodoroFrescoSauce;

class ItalianPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new IntegraleDough();
    }

    public function createSauce(): Sauce
    {
        return new PomodoroFrescoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaDiBufalaCheese();
    }

    /**
     * @return \ArrayObject|Veggie[]
     */
    public function createVeggies(): \ArrayObject
    {
        $veggies = new \ArrayObject();
        $veggies->append(new OriganoVeggie());
        $veggies->append(new BasilicoVeggie());

        return $veggies;
    }

    public function createEggplant(): Eggplant
    {
        return new ItalianMelanzanaBio();
    }
}

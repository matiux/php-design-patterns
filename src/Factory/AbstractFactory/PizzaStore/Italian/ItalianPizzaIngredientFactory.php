<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian;

use ArrayObject;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Cheese;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Dough;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Eggplant;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\PizzaIngredientFactory;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Sauce;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Veggie;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\BasilicoVeggie;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\IntegraleDough;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\ItalianMelanzanaBio;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\MozzarellaDiBufalaCheese;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\OriganoVeggie;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\PomodoroFrescoSauce;

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
     * @return ArrayObject<int, Veggie>
     */
    public function createVeggies(): ArrayObject
    {
        /** @var ArrayObject<int, Veggie> $veggies */
        $veggies = new ArrayObject();
        $veggies->append(new OriganoVeggie());
        $veggies->append(new BasilicoVeggie());

        return $veggies;
    }

    public function createEggplant(): Eggplant
    {
        return new ItalianMelanzanaBio();
    }
}

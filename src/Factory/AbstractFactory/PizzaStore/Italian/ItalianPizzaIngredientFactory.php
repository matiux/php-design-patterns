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
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\FreshTomatoSauce;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\MozzarellaDiBufalaCheese;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\OrganicBasil;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\OrganicItalianEggplant;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\OrganicOrigan;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient\WholemealDough;

class ItalianPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new WholemealDough();
    }

    public function createSauce(): Sauce
    {
        return new FreshTomatoSauce();
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
        $veggies->append(new OrganicOrigan());
        $veggies->append(new OrganicBasil());

        return $veggies;
    }

    public function createEggplant(): Eggplant
    {
        return new OrganicItalianEggplant();
    }
}

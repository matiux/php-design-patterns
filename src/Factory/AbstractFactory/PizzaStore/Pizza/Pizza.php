<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza;

use ArrayObject;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Ingredient;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\PizzaIngredientFactory;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
abstract class Pizza
{
    protected string $name;
    protected Ingredient $dough; // Impasto
    protected ArrayObject $veggies;
    protected Ingredient $cheese;
    protected Ingredient $sauce;
    protected Ingredient $eggplant;
    protected PizzaIngredientFactory $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->veggies = new ArrayObject();
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    abstract public function prepare(): void;

//    public function prepare(): void
//    {
//        echo "Preparo la pizza {$this->name}\n";
//        echo "Stendo l'impasto {$this->dough}\n";
//        echo "Aggiungo la salsa {$this->sauce}\n";
//        echo "Aggiungo i condimenti:\n";
//        foreach ($this->toppings as $topping) {
//
//            echo "\t$topping\n";
//        }
//    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function bake(): void
    {
        echo "Cuocio la pizza per 25 minuti a 200 gradi\n";
    }

    public function cut(): void
    {
        echo "Taglio la pizza a fette\n";
    }

    public function box(): void
    {
        echo "Inscatolo la pizza\n";
    }

    public function name(): string
    {
        return $this->name();
    }
}

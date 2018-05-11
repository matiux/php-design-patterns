<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\PizzaIngredientFactory;

abstract class Pizza
{
    protected $name;
    protected $dough = null; // Impasto
    protected $veggies = null;
    protected $cheese = null;
    protected $sauce = null;
    protected $eggplant = null;

    protected $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->veggies = new \ArrayObject();
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

<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza;

abstract class Pizza
{
    protected $name;
    protected $dough; // Impasto
    protected $veggies;
    protected $cheese;
    protected $sauce;
    protected $eggplant;

    protected $pizzaIngredientFactory;

    public function __construct()
    {
        $this->veggies = new \ArrayObject();
    }

    public function prepare(): void
    {
        echo "Preparo la pizza {$this->name}\n";
        echo "Stendo l'impasto {$this->dough}\n";
        echo "Aggiungo la salsa {$this->sauce}\n";
        echo "Aggiungo le verdure:\n";
        foreach ($this->veggies as $veggy) {
            echo "\t{$veggy}\n";
        }
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

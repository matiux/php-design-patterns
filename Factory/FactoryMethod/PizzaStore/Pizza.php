<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore;

abstract class Pizza
{
    protected $name;
    protected $dough; // Impasto
    protected $sauce;
    protected $toppings;

    public function __construct()
    {
        $this->toppings = new \ArrayObject();
    }

    public function prepare(): void
    {
        echo "Preparo la pizza {$this->name}\n";
        echo "Stendo l'impasto {$this->dough}\n";
        echo "Aggiungo la salsa {$this->sauce}\n";
        echo "Aggiungo i condimenti:\n";
        foreach ($this->toppings as $topping) {

            echo "\t$topping\n";
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

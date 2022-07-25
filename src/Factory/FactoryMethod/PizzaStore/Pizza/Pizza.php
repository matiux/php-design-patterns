<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza;

use ArrayObject;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
abstract class Pizza
{
    protected string $name;
    protected string $dough;
    /** @var ArrayObject<int, string> */
    protected ArrayObject $veggies;
    protected string $cheese;
    protected string $sauce;
    protected string $eggplant;

    public function __construct()
    {
        /** @var ArrayObject<int, string> */
        $this->veggies = new ArrayObject();
    }

    public function prepare(): void
    {
        echo "Preparing the pizza {$this->name}\n";
        echo "Rolling out the dough {$this->dough}\n";
        echo "Adding the sauce {$this->sauce}\n";
        echo "Adding the vegetables:\n";

        foreach ($this->veggies as $veggie) {
            echo "\t{$veggie}\n";
        }
    }

    public function bake(): void
    {
        echo "I bake the pizza for 25 minutes at 200 degrees\n";
    }

    public function cut(): void
    {
        echo "I cut the pizza into slices\n";
    }

    public function box(): void
    {
        echo "I can box the pizza\n";
    }

    public function name(): string
    {
        return $this->name();
    }
}

<?php

namespace DesignPatterns\CompositeIterator\Menu;

class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function print(): void
    {
        echo sprintf(" %s", $this->name);

        if ($this->isVegetarian()) {
            echo "(v)";
        }

        echo sprintf(", %s", $this->price);
        echo sprintf("    --  %s\n", $this->description);
    }

    public function createIterator(): Iterator
    {
        return new NullIterator();
    }
}

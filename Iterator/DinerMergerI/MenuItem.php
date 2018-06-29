<?php

namespace DesignPatterns\Iterator\DinerMergerI;

class MenuItem
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

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function toString(): string
    {
        return sprintf("%s, $ %s -- %s\n", $this->name, $this->price, $this->description);
    }
}

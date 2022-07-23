<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient;

abstract class Ingredient
{
    abstract public function getName(): string;
}

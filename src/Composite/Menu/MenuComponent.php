<?php

declare(strict_types=1);

namespace DesignPatterns\Composite\Menu;

use LogicException;

abstract class MenuComponent
{
    // Composite methods
    public function add(MenuComponent $menuComponent): void
    {
        throw new LogicException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new LogicException();
    }

    public function getChild(int $i): MenuComponent
    {
        throw new LogicException();
    }

    // Operation methods. Used by MenuItems objects
    public function getName(): string
    {
        throw new LogicException();
    }

    public function getDescription(): string
    {
        throw new LogicException();
    }

    public function getPrice(): float
    {
        throw new LogicException();
    }

    public function isVegetarian(): bool
    {
        throw new LogicException();
    }

    // Operation method used by both Menu objects and MenuItems objects
    public function print(): void
    {
        throw new LogicException();
    }
}

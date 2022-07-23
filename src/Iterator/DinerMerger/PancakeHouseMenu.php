<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

use ArrayObject;

class PancakeHouseMenu implements Menu
{
    /** @var ArrayObject<int, MenuItem> */
    private ArrayObject $menuItems;

    public function __construct()
    {
        /** @var ArrayObject<int, MenuItem> */
        $this->menuItems = new ArrayObject();

        $this->addItem("K&B's Pancake Breakfast", 'Pancakes with scrambled eggs, and toast', true, 2.99);
        $this->addItem('Regular Pancake Breakfast', 'Pancakes with fried eggs, sausage', false, 2.99);
        $this->addItem('Blueberry Pancakes', 'Pancakes made with fresh blueberries', true, 3.49);
        $this->addItem('Waffles', 'Waffles, with your choice of blueberries or strawberries', true, 3.59);
    }

    private function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        $this->menuItems->append($menuItem);
    }

    public function getMenuItems(): ArrayObject
    {
        return $this->menuItems;
    }

    public function createIterator(): Iterator
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }

    public function toString(): string
    {
        return 'Objectville Pancake House Menu';
    }
}

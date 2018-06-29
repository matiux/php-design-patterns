<?php

namespace DesignPatterns\Iterator\DinerMergerI;

class DinerMenu implements Menu
{
    private const MAX_ITEMS = 6;

    private $numberOfItems = 0;

    /** @var MenuItem[] */
    private $menuItems = [];

    public function __construct()
    {
        $this->addItem('Vegetarian BLT', "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
        $this->addItem("Hotdog", "A hot dog, with saurkraut, relish, onions, topped with cheese", false, 3.05);
        $this->addItem("Steamed Veggies and Brown Rice", "Steamed vegetables over brown rice", true, 3.99);
        $this->addItem("Pasta", "Spaghetti with Marinara Sauce, and a slice of sourdough bread", true, 3.89);
    }

    private function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if ($this->numberOfItems >= self::MAX_ITEMS) {

            throw new \LogicException("Sorry, menu is full!  Can't add item to menu");

        } else {

            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems += 1;
        }
    }

    /**
     * @return array|MenuItem[]
     */
    public function getMenuItems(): array
    {
        return $this->menuItems;
    }

    public function createIterator(): \Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }
}

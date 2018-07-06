<?php

namespace DesignPatterns\Iterator\DinerMerger;

class CafeMenuIterator implements Iterator
{
    private $menuItems;
    private $position = 0;

    public function __construct(array $menuItems)
    {
        $this->addMenuItems($menuItems);
    }

    public function hasNext(): bool
    {
        if ($this->position >= $this->menuItems || !isset($this->menuItems[$this->position])) {
            return false;
        }

        return true;
    }

    public function next(): MenuItem
    {
        $menuItem = $this->menuItems[$this->position];
        $this->position++;

        return $menuItem;
    }

    private function addMenuItems(array $menuItems): void
    {
        foreach ($menuItems as $menuItem) {

            if (!$menuItem instanceof MenuItem) {
                throw new \LogicException("Wrong type");
            }
        }

        $this->menuItems = $menuItems;
    }
}

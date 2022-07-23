<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;

class DinerMenuIterator implements Iterator
{
    private $menuItems;
    private $position = 0;

    public function __construct(array $menuItems)
    {
        $this->addMenuItems($menuItems);
    }

    private function addMenuItems(array $menuItems): void
    {
        foreach ($menuItems as $menuItem) {
            if (!$menuItem instanceof MenuItem) {
                throw new \LogicException('Wrong type');
            }
        }

        $this->menuItems = $menuItems;
    }

    public function current(): MenuItem
    {
        return $this->menuItems[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->menuItems[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}

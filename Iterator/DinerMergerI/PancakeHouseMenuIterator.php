<?php

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;

class PancakeHouseMenuIterator implements Iterator
{
    private $menuItems;
    private $position = 0;

    public function __construct(\ArrayObject $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function current(): MenuItem
    {
        return $this->menuItems->offsetGet($this->position);
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
        return $this->menuItems->offsetExists($this->position);
    }


    public function rewind(): void
    {
        $this->position = 0;
    }
}

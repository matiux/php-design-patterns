<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

class PancakeHouseMenuIterator implements Iterator
{
    private $menuItems;
    private $position = 0;

    public function __construct(\ArrayObject $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function next(): MenuItem
    {
        $item = $this->menuItems->offsetGet($this->position);
        ++$this->position;

        return $item;
    }

    public function hasNext(): bool
    {
        if ($this->position >= $this->menuItems->count()) {
            return false;
        }

        return true;
    }
}

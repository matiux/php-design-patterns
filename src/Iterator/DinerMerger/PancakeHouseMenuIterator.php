<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

use ArrayObject;

class PancakeHouseMenuIterator implements Iterator
{
    /**
     * @var ArrayObject<int, MenuItem>
     */
    private ArrayObject $menuItems;
    private int $position = 0;

    /**
     * @param ArrayObject<int, MenuItem> $menuItems
     */
    public function __construct(ArrayObject $menuItems)
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

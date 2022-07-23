<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMergerI;

use ArrayObject;
use Iterator;

/**
 * @implements Iterator<MenuItem>
 */
class PancakeHouseMenuIterator implements Iterator
{
    /** @var ArrayObject<int, MenuItem> */
    private ArrayObject $menuItems;
    private int $position = 0;

    /**
     * @param ArrayObject<int, MenuItem> $menuItems
     */
    public function __construct(ArrayObject $menuItems)
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

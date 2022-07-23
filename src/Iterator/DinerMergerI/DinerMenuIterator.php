<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;
use LogicException;

/**
 * @implements Iterator<MenuItem>
 */
class DinerMenuIterator implements Iterator
{
    /**
     * @var MenuItem[]
     */
    private array $menuItems;
    private int $position = 0;

    /**
     * @param MenuItem[] $menuItems
     */
    public function __construct(array $menuItems)
    {
        $this->addMenuItems($menuItems);
    }

    /**
     * @param MenuItem[] $menuItems
     */
    private function addMenuItems(array $menuItems): void
    {
        foreach ($menuItems as $menuItem) {
            if (!$menuItem instanceof MenuItem) {
                throw new LogicException('Wrong type');
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

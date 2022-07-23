<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

use LogicException;

class DinerMenuIterator implements Iterator
{
    /** @var MenuItem[] */
    private array $menuItems;
    private int $position = 0;

    /**
     * @param MenuItem[] $menuItems
     */
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
        ++$this->position;

        return $menuItem;
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
}

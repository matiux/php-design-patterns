<?php

namespace DesignPatterns\CompositeIterator\Menu;

use Iterator as SplIterator;

interface Iterator extends SplIterator
{
    public function hasNext(): bool;

    public function fetchNext(): ?MenuComponent;
}

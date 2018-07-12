<?php

namespace DesignPatterns\CompositeIterator\Menu;

class NullIterator implements Iterator
{
    public function hasNext(): bool
    {
        return false;
    }

    public function next(): MenuItem
    {
        return null;
    }
}

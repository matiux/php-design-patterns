<?php

namespace DesignPatterns\CompositeIterator\Menu;

class NullIterator extends CompositeIterator
{
    public function hasNext(): bool
    {
        return false;
    }
}

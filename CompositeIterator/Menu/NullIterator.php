<?php

namespace DesignPatterns\CompositeIterator\Menu;

class NullIterator implements \Iterator
{
    public function current()
    {
        return null;
    }

    public function next()
    {
        return null;
    }

    public function key()
    {
        return null;
    }

    public function valid()
    {
        return false;
    }

    public function rewind()
    {
        return null;
    }
}

<?php

namespace DesignPatterns\CompositeIterator\Menu;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): MenuItem;
}

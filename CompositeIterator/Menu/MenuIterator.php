<?php

namespace DesignPatterns\CompositeIterator\Menu;

use Iterator;

class MenuIterator implements Iterator
{
//    private $menuComponents;
//
//    public function __construct(\ArrayIterator $menuComponents)
//    {
//        $this->menuComponents = $menuComponents;
//    }
//
//    public function hasNext(): bool
//    {
//        $current = current($this->menuComponents);
//        $next = next($this->menuComponents);
//
//        prev($this->menuComponents);
//        $current = current($this->menuComponents);
//        $c = $this->menuComponents->current();
//        $exp = !(false === $next);
//        return $exp;
//    }
//
//    public function next(): ?MenuComponent
//    {
//        $current = current($this->menuComponents);
//        $next = next($this->menuComponents);
//
//        return $current;
//    }
//
//    public function getInternal()
//    {
//        return $this->menuComponents;
//    }
}

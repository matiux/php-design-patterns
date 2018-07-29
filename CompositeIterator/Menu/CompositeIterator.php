<?php

namespace DesignPatterns\CompositeIterator\Menu;

use Iterator;

class CompositeIterator implements Iterator
{
    private $iterator;
    private $position = 0;

    public function __construct(Iterator $iterator)
    {
        $this->iterator = $iterator;
    }

//    public function next(): ?MenuComponent
//    {
//        if ($this->hasNext()) {
//
//            $iterator = $this->stack[0];
//
//            $component = $iterator->next();
//
//
//            array_unshift($this->stack, $component->createIterator());
//
//
//            return $component;
//        } else {
//
//            return null;
//        }
//    }
//
//    public function hasNext(): bool
//    {
//        $c = count($this->stack);
//
//        if (!$this->stack) {
//
//            return false;
//
//        } else {
//
//            $iterator = $this->stack[0];
//
//            if (!$iterator->hasNext()) {
//
//                array_shift($this->stack);
//
//                return $this->hasNext();
//
//            } else {
//
//                return true;
//            }
//        }

    public function current()
    {
        /** @var MenuComponent $current */
        $current = $this->iterator->current();

        $e = $current->createIterator();

//        if ($current instanceof MenuIterator) {
//            return $current;
//        } else if ($current instanceof Menu) {
//
//            $node = $current->get
//        }
    }

    public function next()
    {

    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->iterator[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}

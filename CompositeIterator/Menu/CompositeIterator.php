<?php

namespace DesignPatterns\CompositeIterator\Menu;

use Iterator;

class CompositeIterator implements Iterator
{
    private $items;

    public function __construct(\ArrayObject $items)
    {
        $this->items = $items;
    }

    public function current(): ?MenuComponent
    {
//        $this->current = clone $this->iterator->current();
//        $this->node = clone $this->iterator;
//
//        if ($this->current instanceof Menu) {
//
//            $this->node = clone $this->current->createIterator();
//            $c = $this->node->current();
//            $this->current = clone $this->node->current();
//
//            return $this->current;
//
//        } else if ($this->current instanceof MenuItem) {
//
//            return $this->current;
//        }

        $current = $this->items->current();

        if ($current instanceof Menu) {

            $i = $current->createIterator();
            $this->items = $i;
            $current = $i->current();
        }

        return $current;
    }

    public function next()
    {
        $this->items->next();

        if (!$this->items->valid()) {
            $this->items = $this->originalIterator;
            $this->items->next();
        }

//        $c = $this->node->current();
//
//        $this->node->next();
//
//        $c = $this->node->current();
//
//        if (!$this->node->valid()) {
//
//            $ci = $this->iterator->current();
//
//            $this->iterator->next();
//
//            $ci = $this->iterator->current();
//
//            if ($this->iterator->valid()) {
//                $this->node = $this->iterator;
//            }
//        }
    }

    public function key()
    {
        $a = 1;
    }

    public function valid(): bool
    {
        $current = current($this->items);

        if ($current instanceof Menu) {
            $i = $current->createIterator();
            $current = current($i);
        }

        $valid = $current ? true : false;

        return $valid;
    }

    public function rewind(): void
    {
        reset($this->items);
    }
}

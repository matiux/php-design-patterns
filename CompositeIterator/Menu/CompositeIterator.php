<?php

namespace DesignPatterns\CompositeIterator\Menu;

class CompositeIterator implements Iterator
{
    private $arrayIterator;
    private $position = 0;

    public function __construct(\ArrayIterator $arrayIterator)
    {
        $this->arrayIterator = $arrayIterator;
    }

//    public function next(): void
//    {
//        $this->arrayIterator->next();
//////        $this->arrayIterator->next();
////        if ($this->hasNext()) {
////            $component = $this->arrayIterator->current();
////
////            $this->arrayIterator->append($component);
////            return $component;
////        }
////
////            //$this->internalIterator->next();
////            $this->currentIterator = $this->arrayIterator->current()->createIterator();
//////
//////            $i = $this->current()->createIterator();
//////            $this->current = $i->current();
//////
//////            return $current;
////        }
//////
//////        return null;
//    }
//
//    public function hasNext(): bool
//    {
//        if (!$this->valid() || !$this->arrayIterator->count()) {
//            return false;
//        }
//
//        $current = $this->arrayIterator->current();
//
//        if ($current->createIterator()->valid()) {
//
//            $this->tmpIterator = $current->createIterator();
//            return true;
//
//        } else {
//
//            $this->tmpIterator = null;
//            return false;
//        }
//
//
////        if (!$currentInnerIterator->hasNext()) {
////
////            $this->arrayIterator->offsetUnset('0');
////            return $this->hasNext();
////
////        } else {
////            return true;
////        }
//
//        return $this->tmpIterator->valid();
//
////        $current = $innerIterator->current();
//
////        if (!$innerIterator->hasNext()) {
////
////            $this->next();
////            return $this->hasNext();
////
////        } else {
////
////            return true;
////        }
//    }
//
//    public function current(): ?MenuComponent
//    {
////        if ($this->hasNext()) {
////
////        }
//
//        $item = $this->arrayIterator->current();
//
//        return $item;
////        $item = $this->arrayIterator->current();
////
////        return $item;
//    }
//
//    public function key()
//    {
//        $key = $this->arrayIterator->key();
//
//        return $key;
//    }
//
//    public function valid(): bool
//    {
//        $valid = $this->arrayIterator->valid();
//
//        return $valid;
//    }
//
//    public function rewind()
//    {
//        $this->arrayIterator->rewind();
//    }
//
//    public function fetchNext(): ?MenuComponent
//    {
//        if ($this->hasNext()) {
//
//            $i = $this->current()->createIterator();
//            $current = $i->current();
//
//            return $current;
//        }
//
//        return null;
//    }
    public function current()
    {

    }

    public function next()
    {

    }

    public function key()
    {

    }

    public function valid()
    {

    }

    public function rewind()
    {

    }

    public function hasNext(): bool
    {
        if ($this->position >= $this->arrayIterator->count() || !$this->arrayIterator->offsetGet($this->position)) {
            return false;
        } else {
            return true;
        }
    }

    public function fetchNext(): ?MenuComponent
    {
        $component = $this->arrayIterator->offsetGet($this->position);
        $this->position++;
        return $component;
    }
}

<?php

namespace DesignPatterns\CompositeIterator\Menu;

class CompositeIterator extends \CachingIterator
{
    public function next(): void
    {
        if ($this->hasNext()) {

            $k = $this->getInnerIterator()->key();
            $c = $this->count();

            $next = $this->offsetGet("1");

            $iterator = $this->current();
            $this->next();
            $iterator = $this->current();
            prev($this->getInnerIterator());
        }
    }


    public function hasNext(): bool
    {
        if (count($this)) {
            return false;
        }

        parent::next();
        $next = $this->getInnerIterator();

        $next->next();

        $c2 = $this->current();
        $a = 1;
    }
}

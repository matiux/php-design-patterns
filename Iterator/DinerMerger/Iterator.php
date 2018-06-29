<?php

namespace DesignPatterns\Iterator\DinerMerger;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): MenuItem;
}

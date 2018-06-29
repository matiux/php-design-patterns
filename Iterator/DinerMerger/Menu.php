<?php

namespace DesignPatterns\Iterator\DinerMerger;

interface Menu
{
    public function createIterator(): Iterator;
}

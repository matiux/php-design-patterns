<?php

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;

interface Menu
{
    public function createIterator(): Iterator;
}

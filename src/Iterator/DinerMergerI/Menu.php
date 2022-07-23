<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;

interface Menu
{
    /**
     * @return Iterator<MenuItem>
     */
    public function createIterator(): Iterator;
}

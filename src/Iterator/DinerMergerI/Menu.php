<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMergerI;

use Iterator;

interface Menu
{
    public function createIterator(): Iterator;
}

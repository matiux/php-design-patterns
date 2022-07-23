<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

interface Menu
{
    public function createIterator(): Iterator;
}

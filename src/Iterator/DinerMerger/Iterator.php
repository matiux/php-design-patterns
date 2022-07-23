<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): MenuItem;
}

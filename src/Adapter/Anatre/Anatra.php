<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

/**
 * Target interface.
 *
 * Interface Anatra
 */
interface Anatra
{
    public function quack(): void;

    public function vola(): void;
}

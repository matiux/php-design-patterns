<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

/**
 * Target interface.
 *
 * Interface Anatra
 */
interface Duck
{
    public function quack(): void;

    public function fly(): void;
}

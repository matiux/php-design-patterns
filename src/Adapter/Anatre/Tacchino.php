<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

/**
 * Target interface.
 *
 * Interface Tacchino
 */
interface Tacchino
{
    public function ingurgita(): void;

    public function vola(): void;
}

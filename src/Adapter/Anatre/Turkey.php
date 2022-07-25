<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

/**
 * Target interface.
 *
 * Interface Tacchino
 */
interface Turkey
{
    public function swallows(): void;

    public function fly(): void;
}

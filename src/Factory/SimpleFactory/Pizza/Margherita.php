<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\SimpleFactory\Pizza;

class Margherita implements Pizza
{
    public function prepare(): void
    {
    }

    public function bake(): void
    {
    }

    public function cut(): void
    {
    }

    public function box(): void
    {
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack!\n";
    }
}

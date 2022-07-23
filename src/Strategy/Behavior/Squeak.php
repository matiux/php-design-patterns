<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak\n";
    }
}

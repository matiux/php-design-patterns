<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "Non posso volare!\n";
    }
}

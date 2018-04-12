<?php

namespace DesignPatterns\Strategy\Behavior;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "Non posso volare!\n";
    }
}

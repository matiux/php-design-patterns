<?php

namespace DesignPatterns\Strategy\Behavior;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "Sto volando!!\n";
    }
}

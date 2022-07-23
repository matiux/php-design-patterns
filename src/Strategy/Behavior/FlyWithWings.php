<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "Sto volando!!\n";
    }
}

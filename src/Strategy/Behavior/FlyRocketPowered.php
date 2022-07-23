<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "Volo come un razzo!\n";
    }
}

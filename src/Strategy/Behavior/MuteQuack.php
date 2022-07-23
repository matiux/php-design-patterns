<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Behavior;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<<Silenzio>>\n";
    }
}

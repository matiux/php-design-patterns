<?php

namespace DesignPatterns\Strategy\Behavior;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<<Silenzio>>\n";
    }
}

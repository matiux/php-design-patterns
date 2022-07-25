<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class Mallard implements Duck
{
    public function quack(): void
    {
        echo 'Faccio quack'."\n";
    }

    public function fly(): void
    {
        echo 'Sto volando'."\n";
    }
}

<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class GermanoReale implements Anatra
{
    public function quack(): void
    {
        echo 'Faccio quack'."\n";
    }

    public function vola(): void
    {
        echo 'Sto volando'."\n";
    }
}

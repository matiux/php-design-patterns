<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class TacchinoSelvatico implements Tacchino
{
    public function ingurgita(): void
    {
        echo 'Glu Glu'."\n";
    }

    public function vola(): void
    {
        echo 'Volo per brevi distanze'."\n";
    }
}

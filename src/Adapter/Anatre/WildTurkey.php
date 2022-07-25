<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class WildTurkey implements Turkey
{
    public function swallows(): void
    {
        echo 'Glu Glu'."\n";
    }

    public function fly(): void
    {
        echo 'Flight for short distances'."\n";
    }
}

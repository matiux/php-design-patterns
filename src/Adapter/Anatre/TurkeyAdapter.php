<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class TurkeyAdapter implements Duck
{
    private Turkey $turkey;

    public function __construct(Turkey $tacchino)
    {
        $this->turkey = $tacchino;
    }

    public function quack(): void
    {
        $this->turkey->swallows();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; ++$i) {
            $this->turkey->fly();
        }
    }
}

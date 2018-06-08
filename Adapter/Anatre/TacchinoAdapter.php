<?php

namespace DesignPatterns\Adapter\Anatre;

class TacchinoAdapter implements Anatra
{
    private $tacchino;

    public function __construct(Tacchino $tacchino)
    {
        $this->tacchino = $tacchino;
    }

    public function quack(): void
    {
        $this->tacchino->ingurgita();
    }

    public function vola(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->tacchino->vola();
        }
    }
}

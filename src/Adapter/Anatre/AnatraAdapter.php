<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class AnatraAdapter implements Tacchino
{
    private Anatra $anatra;
    private int $rand;

    public function __construct(Anatra $anatra)
    {
        $this->anatra = $anatra;
        $this->rand = rand(5, 10);
    }

    public function ingurgita(): void
    {
        $this->anatra->quack();
    }

    public function vola(): void
    {
        $this->anatra->vola();
    }
}

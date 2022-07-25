<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Anatre;

class DuckAdapter implements Turkey
{
    private Duck $duck;
    private int $rand;

    public function __construct(Duck $anatra)
    {
        $this->duck = $anatra;
        $this->rand = rand(5, 10);
    }

    public function swallows(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        $this->duck->fly();
    }
}

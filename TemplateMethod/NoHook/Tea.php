<?php

namespace DesignPatterns\TemplateMethod\NoHook;

class Tea extends BevandaAllaCaffeina
{
    protected function miscela(): void
    {
        echo 'Faccio macerare il Tea' . "\n";
    }

    protected function aggiungiCondimenti(): void
    {
        echo 'Aggiungo zucchero e limone' . "\n";
    }
}

<?php

namespace DesignPatterns\TemplateMethod\Hook;

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

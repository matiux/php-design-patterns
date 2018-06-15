<?php

namespace DesignPatterns\TemplateMethod\NoHook;

class Caffe extends BevandaAllaCaffeina
{
    protected function miscela(): void
    {
        echo 'Preparare il caffè' . "\n";
    }

    protected function aggiungiCondimenti(): void
    {
        echo 'Aggiungo il latte' . "\n";
    }
}

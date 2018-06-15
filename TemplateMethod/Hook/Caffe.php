<?php

namespace DesignPatterns\TemplateMethod\Hook;

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

    protected function clienteVuoleCondimenti(): bool
    {
        $condire = $this->condimentoNecessario();

        return $condire;
    }

    private function condimentoNecessario(): bool
    {
        /**
         * In qualche modo determino se il cliente vuole o no il condimento
         */

        return false;
    }
}

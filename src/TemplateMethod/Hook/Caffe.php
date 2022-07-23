<?php

declare(strict_types=1);

namespace DesignPatterns\TemplateMethod\Hook;

class Caffe extends BevandaAllaCaffeina
{
    protected function miscela(): void
    {
        echo 'Preparare il caffè'."\n";
    }

    protected function aggiungiCondimenti(): void
    {
        echo 'Aggiungo il latte'."\n";
    }

    protected function clienteVuoleCondimenti(): bool
    {
        return $this->condimentoNecessario();
    }

    private function condimentoNecessario(): bool
    {
        /**
         * In qualche modo determino se il cliente vuole o no il condimento.
         */

        return false;
    }
}

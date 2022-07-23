<?php

declare(strict_types=1);

namespace DesignPatterns\TemplateMethod\Hook;

abstract class BevandaAllaCaffeina
{
    final public function preparaBevanda()
    {
        $this->bolliAcqua();
        $this->miscela();
        $this->versaNellaTazza();

        if ($this->clienteVuoleCondimenti()) {
            $this->aggiungiCondimenti();
        }
    }

    abstract protected function miscela(): void;

    abstract protected function aggiungiCondimenti(): void;

    protected function bolliAcqua(): void
    {
        echo 'Faccio bollire l\'acqua'."\n";
    }

    protected function versaNellaTazza(): void
    {
        echo 'Verso nella tazza'."\n";
    }

    /**
     * Metodo hook
     * Un metodo hook viene dichiato qui nella classe astratta ma fornisce solo un'implementazione
     * vuota o di default. Ciò da modo alle sottoclassi di "agganciarsi" a questo metodo dell'algoritmo
     * a un certo punto, se lo desiderano. Le sotto classi potrebbero anche ignorarlo.
     *
     * @return bool
     */
    protected function clienteVuoleCondimenti(): bool
    {
        return true;
    }
}

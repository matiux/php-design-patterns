<?php

namespace DesignPatterns\TemplateMethod\NoHook;

abstract class BevandaAllaCaffeina
{
    final public function preparaBevanda()
    {
        $this->bolliAcqua();
        $this->miscela();
        $this->versaNellaTazza();
        $this->aggiungiCondimenti();
    }

    abstract protected function miscela(): void;

    abstract protected function aggiungiCondimenti(): void;

    protected function bolliAcqua(): void
    {
        echo 'Faccio bollire l\'acqua' . "\n";
    }

    protected function versaNellaTazza(): void
    {
        echo 'Verso nella tazza' . "\n";
    }
}

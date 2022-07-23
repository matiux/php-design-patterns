<?php

declare(strict_types=1);

namespace DesignPatterns\Singleton;

class Singleton
{
    /**
     * Rendiamo iil costruttore privato al fine di prevenire la creazione di una nuova istanza
     * della classe in questione attraverso l'operatore `new` al di fuori della classe.
     */
    protected function __construct()
    {
    }

    public static function getInstance(): self
    {
        static $instance = null;

        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Rendiamo il metodo __clone() provate al fine di evitare la clonazione dell'istanza.
     */
    private function __clone()
    {
    }

    public function method()
    {
        echo 'Faccio qualcosa'."\n";
    }
}

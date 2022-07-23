<?php

declare(strict_types=1);

namespace DesignPatterns\Singleton;

class Singleton
{
    private static ?self $instance = null;

    /**
     * Rendiamo iil costruttore privato al fine di prevenire la creazione di una nuova istanza
     * della classe in questione attraverso l'operatore `new` al di fuori della classe.
     */
    protected function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Rendiamo il metodo __clone() provate al fine di evitare la clonazione dell'istanza.
     */
    private function __clone()
    {
    }

    public function method(): void
    {
        echo 'Faccio qualcosa'."\n";
    }
}

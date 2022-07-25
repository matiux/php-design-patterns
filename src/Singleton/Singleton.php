<?php

declare(strict_types=1);

namespace DesignPatterns\Singleton;

class Singleton
{
    private static ?self $instance = null;

    /**
     * Let's make the constructor private in order to prevent the creation of a new instance of the class in question
     * via the `new` operator outside the class.
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
     * Let's make the __clone () method tried in order to avoid cloning the instance.
     */
    private function __clone()
    {
    }

    public function method(): void
    {
        echo 'I do something'."\n";
    }
}

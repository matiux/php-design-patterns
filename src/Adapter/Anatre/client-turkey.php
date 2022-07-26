<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Adapter\Anatre\Duck;
use DesignPatterns\Adapter\Anatre\DuckAdapter;
use DesignPatterns\Adapter\Anatre\Mallard;

function runDuck(Duck $anatra): void
{
    $anatra->quack();
    $anatra->fly();
}

$mallard = new Mallard();
$duckAdapter = new DuckAdapter($mallard);

for ($i = 0; $i < 10; ++$i) {
    echo 'The duck adapter says:'."\n";
    $duckAdapter->swallows();
    $duckAdapter->fly();
}

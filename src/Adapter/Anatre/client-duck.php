<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Adapter\Anatre\Duck;
use DesignPatterns\Adapter\Anatre\Mallard;
use DesignPatterns\Adapter\Anatre\TurkeyAdapter;
use DesignPatterns\Adapter\Anatre\WildTurkey;

/**
 * Adapter pattern converte l'interfaccia di una classe in un'altra che il client si aspetta.
 *
 * 1) The client makes a request to the adapter by calling a method on it using the target interface.
 * 2) The adapter translates the request into one or more calls on the adaptee using the adaptee interface.
 * 3) The client receives the results of the call and never knows there is an adapter doing the translation.
 */
$mallard = new Mallard();

$wildTurkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($wildTurkey);

echo 'The wild turkey says:'."\n";
$wildTurkey->swallows();
$wildTurkey->fly();

echo '---------'."\n";

echo 'The duck says:'."\n";
runDuck($mallard);

echo '---------'."\n";

echo 'The turkey adapter says:'."\n";
runDuck($turkeyAdapter);

echo '---------'."\n";

function runDuck(Duck $duck): void
{
    $duck->quack();
    $duck->fly();
}

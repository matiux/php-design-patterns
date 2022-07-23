<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Adapter\Anatre\Anatra;
use DesignPatterns\Adapter\Anatre\GermanoReale;
use DesignPatterns\Adapter\Anatre\TacchinoAdapter;
use DesignPatterns\Adapter\Anatre\TacchinoSelvatico;

/**
 * Adapter pattern converte l'interfaccia di una classe in un'altra che il client si aspetta.
 *
 * 1) The client makes a request to the adapter by calling a method on it using the target interface.
 * 2) The adapter translates the request into one or more calls on the adaptee using the adaptee interface.
 * 3) The client receives the results of the call and never knows there is an adapter doing the translation.
 */
$germanoReale = new GermanoReale();

$tacchinoSelvatico = new TacchinoSelvatico();
$tacchinoAdapter = new TacchinoAdapter($tacchinoSelvatico);

echo 'Ll tacchino selvatico dice:'."\n";
$tacchinoSelvatico->ingurgita();
$tacchinoSelvatico->vola();

echo '---------'."\n";

echo "L'anatra dice:"."\n";
runAnatra($germanoReale);

echo '---------'."\n";

echo "L'adapter del tacchino dice"."\n";
runAnatra($tacchinoAdapter);

echo '---------'."\n";

function runAnatra(Anatra $anatra): void
{
    $anatra->quack();
    $anatra->vola();
}

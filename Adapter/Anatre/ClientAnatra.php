<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Adapter\Anatre\Anatra;
use DesignPatterns\Adapter\Anatre\GermanoReale;
use DesignPatterns\Adapter\Anatre\TacchinoAdapter;
use DesignPatterns\Adapter\Anatre\TacchinoSelvatico;

function runAnatra(Anatra $anatra)
{
    $anatra->quack();
    $anatra->vola();
}

$germanoReale = new GermanoReale();


$tacchinoSelvatico = new TacchinoSelvatico();
$tacchinoAdapter = new TacchinoAdapter($tacchinoSelvatico);

echo 'Ll tacchino selvatico dice:' . "\n";
$tacchinoSelvatico->ingurgita();
$tacchinoSelvatico->vola();

echo '---------' . "\n";

echo "L'anatra dice:" . "\n";
runAnatra($germanoReale);

echo '---------' . "\n";

echo "L'adapter del tacchino dice" . "\n";
runAnatra($tacchinoAdapter);

echo '---------' . "\n";

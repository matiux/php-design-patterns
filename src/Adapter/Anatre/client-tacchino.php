<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Adapter\Anatre\Anatra;
use DesignPatterns\Adapter\Anatre\AnatraAdapter;
use DesignPatterns\Adapter\Anatre\GermanoReale;

function runAnatra(Anatra $anatra)
{
    $anatra->quack();
    $anatra->vola();
}

$germanoReale = new GermanoReale();
$anatraAdapter = new AnatraAdapter($germanoReale);

for ($i = 0; $i < 10; ++$i) {
    echo "L'adapter dell'anatra dice:"."\n";
    $anatraAdapter->ingurgita();
    $anatraAdapter->vola();
}

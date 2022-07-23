<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\TemplateMethod\Hook\Caffe;
use DesignPatterns\TemplateMethod\Hook\Tea;

echo '---------------'."\n";
$caffe = new Caffe();
$caffe->preparaBevanda();
echo '---------------'."\n";
$tea = new Tea();
$tea->preparaBevanda();
echo '---------------'."\n";

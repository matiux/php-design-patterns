<?php

use DesignPatterns\TemplateMethod\Hook\Caffe;
use DesignPatterns\TemplateMethod\Hook\Tea;

require __DIR__ . '/../../vendor/autoload.php';

echo '---------------' . "\n";
$caffe = new Caffe();
$caffe->preparaBevanda();
echo '---------------' . "\n";
$tea = new Tea();
$tea->preparaBevanda();
echo '---------------' . "\n";

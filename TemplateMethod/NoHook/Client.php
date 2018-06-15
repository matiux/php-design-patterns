<?php

use DesignPatterns\TemplateMethod\NoHook\Caffe;
use DesignPatterns\TemplateMethod\NoHook\Tea;

require __DIR__ . '/../../vendor/autoload.php';

echo '---------------' . "\n";
$caffe = new Caffe();
$caffe->preparaBevanda();
echo '---------------' . "\n";
$tea = new Tea();
$tea->preparaBevanda();
echo '---------------' . "\n";

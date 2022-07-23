<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\SimpleFactory\Pizza;

interface Pizza
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();
}

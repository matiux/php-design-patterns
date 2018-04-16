<?php

namespace DesignPatterns\Factory\FactoryMethod\Pizza;

interface Pizza
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();

}

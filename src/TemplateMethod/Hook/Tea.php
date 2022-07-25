<?php

declare(strict_types=1);

namespace DesignPatterns\TemplateMethod\Hook;

class Tea extends CaffeineBeverage
{
    protected function blend(): void
    {
        echo 'I macerate the tea'."\n";
    }

    protected function addCondiments(): void
    {
        echo 'I add sugar and lemon'."\n";
    }
}

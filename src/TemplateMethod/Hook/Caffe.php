<?php

declare(strict_types=1);

namespace DesignPatterns\TemplateMethod\Hook;

class Caffe extends CaffeineBeverage
{
    protected function blend(): void
    {
        echo 'Prepare the coffee'."\n";
    }

    protected function addCondiments(): void
    {
        echo 'I add the milk'."\n";
    }

    protected function customerWantsCondiments(): bool
    {
        return $this->condimentNeeded();
    }

    private function condimentNeeded(): bool
    {
        /**
         * In qualche modo determino se il cliente vuole o no il condimento.
         */

        return false;
    }
}

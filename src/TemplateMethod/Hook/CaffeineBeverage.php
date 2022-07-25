<?php

declare(strict_types=1);

namespace DesignPatterns\TemplateMethod\Hook;

abstract class CaffeineBeverage
{
    final public function prepareBeverage(): void
    {
        $this->boilTheWater();
        $this->blend();
        $this->pourIntoTheCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    abstract protected function blend(): void;

    abstract protected function addCondiments(): void;

    protected function boilTheWater(): void
    {
        echo 'I boil the water'."\n";
    }

    protected function pourIntoTheCup(): void
    {
        echo 'I pour into the cup'."\n";
    }

    /**
     * Hook method
     * A hook method is declared here in the abstract class but only provides an empty or default implementation.
     * This allows subclasses to "hook" to this algorithm method at some point if they wish. Subclasses may also
     * ignore it.
     *
     * @return bool
     */
    protected function customerWantsCondiments(): bool
    {
        return true;
    }
}

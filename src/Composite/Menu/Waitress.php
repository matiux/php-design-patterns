<?php

declare(strict_types=1);

namespace DesignPatterns\Composite\Menu;

class Waitress
{
    private MenuComponent $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        $this->allMenus->print();
    }
}

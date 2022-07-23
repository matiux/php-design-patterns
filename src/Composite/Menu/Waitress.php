<?php

declare(strict_types=1);

namespace DesignPatterns\Composite\Menu;

class Waitress
{
    /** @var MenuComponent */
    private $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }
}

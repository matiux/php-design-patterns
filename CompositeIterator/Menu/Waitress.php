<?php

namespace DesignPatterns\CompositeIterator\Menu;

class Waitress
{
    private $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }

    public function printVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();

        echo sprintf("\nVEGETARIAN MENU\n----\n");

        /** @var MenuComponent $menuComponent */
        foreach ($iterator as $menuComponent) {

            try {

                if ($menuComponent->isVegetarian()) {

                    $menuComponent->print();
                }

            } catch (\LogicException $e) {
            }
        }

    }
}

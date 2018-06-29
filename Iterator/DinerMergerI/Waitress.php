<?php

namespace DesignPatterns\Iterator\DinerMergerI;

class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();

        echo sprintf("MENU\n-----\nBREAKFAST:\n");
        $this->doPrintMenu($pancakeIterator);
        echo sprintf("\nLUNCH:\n");
        $this->doPrintMenu($dinerIterator);
    }

    private function doPrintMenu(\Iterator $iterator): void
    {
        foreach ($iterator as $menuItem) {

            echo sprintf("%s, $%s -- %s\n", $menuItem->getName(), $menuItem->getPrice(), $menuItem->getDescription());
        }
    }

    public function printVegetarianMenu(): void
    {
        $this->doPrintVegetarianMenu($this->pancakeHouseMenu->createIterator());
        $this->doPrintVegetarianMenu($this->dinerMenu->createIterator());
    }

    private function doPrintVegetarianMenu(\Iterator $iterator): void
    {
        foreach ($iterator as $menuItem) {

            if ($menuItem->isVegetarian()) {

                echo sprintf("%s, %s -- %s\n", $menuItem->getName(), $menuItem->getPrice(), $menuItem->getDescription());
            }
        }
    }

    public function isItemVegetarian(string $name): bool
    {
        $breakfastIterator = $this->pancakeHouseMenu->createIterator();
        if ($this->isVegetarian($name, $breakfastIterator)) {
            return true;
        }

        $dinnerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinnerIterator)) {
            return true;
        }
        return false;
    }

    private function isVegetarian(string $name, \Iterator $iterator): bool
    {
        foreach ($iterator as $menuItem) {

            if ($menuItem->getName() === $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
        }

        return false;
    }
}

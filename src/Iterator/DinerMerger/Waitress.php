<?php

declare(strict_types=1);

namespace DesignPatterns\Iterator\DinerMerger;

class Waitress
{
    private Menu $pancakeHouseMenu;
    private Menu $dinerMenu;
    private Menu $cafeMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu, CafeMenu $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    /**
     * Violazione del principio Open Closed (Open Closed Principle).
     */
    public function printMenu(): void
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();

        echo sprintf("MENU\n-----\nBREAKFAST:\n");
        $this->doPrintMenu($pancakeIterator);

        echo sprintf("\nLUNCH:\n");
        $this->doPrintMenu($dinerIterator);

        echo sprintf("\nCAFE:\n");
        $this->doPrintMenu($cafeIterator);
    }

    private function doPrintMenu(Iterator $iterator): void
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();

            echo sprintf("%s, $%s -- %s\n", $menuItem->getName(), $menuItem->getPrice(), $menuItem->getDescription());
        }
    }

    public function printVegetarianMenu(): void
    {
        $this->doPrintVegetarianMenu($this->pancakeHouseMenu->createIterator());
        $this->doPrintVegetarianMenu($this->dinerMenu->createIterator());
    }

    private function doPrintVegetarianMenu(Iterator $iterator): void
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();

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

    private function isVegetarian(string $name, Iterator $iterator): bool
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();

            if ($menuItem->getName() === $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
        }

        return false;
    }
}

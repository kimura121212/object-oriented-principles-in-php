<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing a cofee');
    }
}

class SpecialtyCofeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

(new SpecialtyCofeeMaker())->brewLatte();
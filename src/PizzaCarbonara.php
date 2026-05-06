<?php
namespace App;
use PizzaLib\Pizza;

class PizzaCarbonara extends Pizza {
    public function __construct() {
        $this->name = "Карбонара";
        $this->sauce = "Барбекю";
        $this->toppings = ["Бекон", "Ветчина"];
    }
}

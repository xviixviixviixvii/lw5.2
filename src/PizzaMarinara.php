<?php
namespace App;
use PizzaLib\Pizza;

class PizzaMarinara extends Pizza {
    public function __construct() {
        $this->name = "Маринара";
        $this->sauce = "Томатный";
        $this->toppings = ["Колбаски", "Орегано"];
    }
}

<?php
namespace App;
use PizzaLib\Pizza;

class PizzaMargherita extends Pizza {
    public function __construct() {
        $this->name = "Маргарита";
        $this->sauce = "Сливочный";
        $this->toppings = ["Моцарелла", "Пармезан"];
    }
}

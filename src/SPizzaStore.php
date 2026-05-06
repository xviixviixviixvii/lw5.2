<?php
namespace App;

use PizzaLib\PizzaStore;
use PizzaLib\Pizza;

class SPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza {
        return match ($type) {
            'cheese' => new PizzaMargherita(),
            'pepperoni' => new PizzaMarinara(),
            'meat' => new PizzaCarbonara(),
            default => throw new \Exception("Тип пиццы $type не найден"),
        };
    }
}

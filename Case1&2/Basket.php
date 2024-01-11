<?php

class Basket
{
    public $price;
    public $amount;
    public $type;

    public function __construct($price, $amount, $type = "fruit")
    {
        $this->price = $price;
        $this->amount = $amount;
        $this->type = $type;
    }

    public function calculatePrice($discount = 0.5)
    {
        $totalPrice = $this->price * $this->amount;

        $totalPrice = 0;
        if ($this->type === "fruit") {
            $totalPrice += ($this->price * $this->amount) * $discount;
        } else {
            $totalPrice += $this->price * $this->amount;
        }

        return $totalPrice;
    }

    public function calculateTax()
    {
        $totalTaxes = 0;
        if ($this->type === "fruit") {
            $totalTaxes += $this->calculatePrice() * 0.06;
        } else {
            $totalTaxes += $this->calculatePrice() * 0.21;
        }
        return $totalTaxes;
    }
}

$banana = new Basket(1, 6);
$apple = new Basket(1.5, 3);
$wineBottles = new Basket(10, 2, "alcohol");

echo "total price = " . $banana->calculatePrice() + $apple->calculatePrice() + $wineBottles->calculatePrice() . "<br>";
echo "total taxes = " . $banana->calculateTax() + $apple->calculateTax() + $wineBottles->calculateTax();
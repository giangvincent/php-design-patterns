<?php

class Stock {
    private $symbol;
    private $price;

    public function __construct($symbol, $price) {
        $this->symbol = $symbol;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }


    public function __toString() {
        return "Stock{" +
                "symbol='" + $this->symbol + '\'' +
                ", price=" + $this->price +
                '}';
    }
}

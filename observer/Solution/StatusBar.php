<?php
require_once 'Stock.php';

class StatusBar {
    private $stocks = array();

    public function addStock(Stock $stock) {
        $this->stocks[] = $stock;
    }

    public function show() {
        foreach ($this->stocks as $stock)
            echo $stock;
    }
}

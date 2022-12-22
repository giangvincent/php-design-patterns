<?php

class StockListView {
    private $stocks = array();

    public function addStock($stock) {
        $this->stocks[] = $stock;
    }

    public function show() {
        foreach ($this->stocks as $stock)
            echo $stock;
    }
}

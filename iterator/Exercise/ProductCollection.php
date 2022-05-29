<?php
require_once 'Product.php';

class ProductCollection {
  private $products = array();

  public function add(Product $product) {
    $this->products[] = $product;
  }

}

<?php

class Product {
  private $id;
  private $name;

  public function __construct($id, $name) {
    $this->id = $id;
    $this->name = $name;
  }

  public function __toString() {
    return "Product{" +
            "id=" + $this->id +
            ", name='" + $this->name + '\'' +
            '}';
  }
}

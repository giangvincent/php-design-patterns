<?php

class Product {
  private $id;
  private $name;

  public function __construct($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }
}

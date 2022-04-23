<?php
require_once 'ActionInterface.php';

class Team implements ActionInterface {
  private $resources = [];

  public function add(ActionInterface $resource) {
    $this->resources[] = $resource;
  }

  public function deploy() {
    foreach ($this->resources as $resource) {
      $resource->deploy();
    }
  }
}
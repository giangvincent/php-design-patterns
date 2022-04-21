<?php

class Team {
  private $resources = [];

  public function add($resource) {
    $this->resources[] = $resource;
  }

  public function deploy() {
    foreach ($this->resources as $resource) {
      $resource->deploy();
    }
  }
}
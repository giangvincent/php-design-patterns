<?php
require_once 'ActionInterface.php';
class Truck implements ActionInterface {
  public function deploy() {
    printf("Deploying a truck\n");
  }
}
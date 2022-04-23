<?php
require_once 'ActionInterface.php';
class HumanResource implements ActionInterface {
  public function deploy() {
    printf("Deploying a human resource\n");
  }
}
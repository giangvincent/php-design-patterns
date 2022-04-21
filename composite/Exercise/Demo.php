<?php

require_once 'HumanResource.php';
require_once 'Truck.php';
require_once 'Team.php';

class Demo {
  public static function show() {
    $subTeam1 = new Team();
    $subTeam1->add(new Truck());
    $subTeam1->add(new HumanResource());
    $subTeam1->add(new HumanResource());

    $subTeam2 = new Team();
    $subTeam2->add(new Truck());
    $subTeam2->add(new HumanResource());
    $subTeam2->add(new HumanResource());

    $team = new Team();
    $team->add($subTeam1);
    $team->add($subTeam2);

    $team->deploy();
  }
}

Demo::show();
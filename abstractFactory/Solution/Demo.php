<?php
require_once 'Homepage.php';
require_once 'BuildMuscle/BuildMuscle.php';
require_once 'WeighLoss/WeighLoss.php';

class Demo {
    public static function show() {
        // $homePage = new HomePage();
        // $homePage->setPlan(new BuildMuscle());

        $homePage = new HomePage();
        $homePage->setPlan(new WeighLoss());
    }
}

$demo = new Demo();
$demo->show();
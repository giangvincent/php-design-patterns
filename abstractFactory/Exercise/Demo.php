<?php

class Demo {
    public static function show() {
        $homePage = new HomePage();
        $homePage->setGoal(Goal::WEIGHT_LOSS);
    }
}

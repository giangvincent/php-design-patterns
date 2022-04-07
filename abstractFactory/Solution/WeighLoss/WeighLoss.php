<?php
require_once './GoalPlan.php';
require_once 'WeighLossWorkout.php';
require_once 'WeighLossMealPlan.php';

class WeighLoss implements GoalPlan {

    public function getMealPlan() {
        return new WeighLossMealPlan();
    }

    public function getWorkoutPlan() {
        return new WeighLossWorkout();
    }

}
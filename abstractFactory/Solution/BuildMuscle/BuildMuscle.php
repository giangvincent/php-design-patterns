<?php
require_once './GoalPlan.php';
require_once 'BuildMuscleWorkout.php';
require_once 'BuildMuscleMealPlan.php';

class BuildMuscle implements GoalPlan {

    public function getMealPlan() {
        return new BuildMuscleMealPlan();
    }

    public function getWorkoutPlan() {
        return new BuildMuscleWorkout();
    }
}
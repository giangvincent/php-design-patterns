<?php
require_once './WorkoutPlan.php';

class BuildMuscleWorkout implements WorkoutPlan {
    public function getMorningWorkout() {
        return 'BuildMuscle: Go to the gym';
    }
    public function getLunchWorkout() {
        return 'BuildMuscle: Go to the gym';
    }
    public function getEveningWorkout() {
        return 'BuildMuscle: Go to the gym';
    }
}

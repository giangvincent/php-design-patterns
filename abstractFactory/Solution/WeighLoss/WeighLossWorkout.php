<?php
require_once './WorkoutPlan.php';

class WeighLossWorkout implements WorkoutPlan {
    public function getMorningWorkout() {
        return 'WeighLoss: Go to the gym';
    }
    public function getLunchWorkout() {
        return 'WeighLoss: Go to the gym';
    }
    public function getEveningWorkout() {
        return 'WeighLoss: Go to the gym';
    }
}

<?php

class HomePage {
    private $workoutPlan;
    private $mealPlan;

    public function setGoal($goal) {
        if ($goal == Goal::BUILD_MUSCLE) {
            $this->workoutPlan = new BuildMuscleWorkout();
            $this->mealPlan = new BuildMuscleMealPlan();
        }
        else if ($goal == Goal::WEIGHT_LOSS) {
            $this->workoutPlan = new WeightLossWorkout();
            $this->mealPlan = new WeighLossMealPlan();
        }
        printf($this->workoutPlan->getWorkoutPlan());
        printf($this->mealPlan->getMealPlan());

    }
}

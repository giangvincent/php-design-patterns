<?php
require_once 'GoalPlan.php';
require_once 'MealPlan.php';
require_once 'WorkoutPlan.php';

class HomePage {
    private $workoutPlan;
    private $mealPlan;

    public function setPlan(GoalPlan $goal) {
        $this->workoutPlan = $goal->getWorkoutPlan();
        $this->mealPlan = $goal->getMealPlan();

        $this->getMealPlan($this->mealPlan);
        $this->getWorkoutPlan($this->workoutPlan);
    }

    public function getMealPlan(MealPlan $mealPlan) {
        echo $mealPlan->getMorningMeal();
        echo $mealPlan->getLunch();
        echo $mealPlan->getDinner();
    }

    public function getWorkoutPlan(WorkoutPlan $workoutPlan) {
        echo $workoutPlan->getMorningWorkout();
        echo $workoutPlan->getLunchWorkout();
        echo $workoutPlan->getEveningWorkout();
    }
}

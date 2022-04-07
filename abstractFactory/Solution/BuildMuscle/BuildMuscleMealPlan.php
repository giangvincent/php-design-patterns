<?php
require_once './MealPlan.php';

class BuildMuscleMealPlan implements MealPlan {
    public function getMorningMeal() {
        return 'BuildMuscle: Breakfast';
    }
    public function getLunch() {
        return 'BuildMuscle: Lunch';
    }
    public function getDinner() {
        return 'BuildMuscle: Dinner';
    }
}

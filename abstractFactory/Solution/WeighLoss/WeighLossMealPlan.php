<?php
require_once './MealPlan.php';

class WeighLossMealPlan implements MealPlan {
    public function getMorningMeal() {
        return 'WeighLoss: Breakfast';
    }
    public function getLunch() {
        return 'WeighLoss: Lunch';
    }
    public function getDinner() {
        return 'WeighLoss: Dinner';
    }
}

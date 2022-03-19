<?php

class Bicycling implements TravelModeInterface {
    public function getETA() {
        return 3;
    }
    public function getDirection() {
        return "Bike straight";
    }
}
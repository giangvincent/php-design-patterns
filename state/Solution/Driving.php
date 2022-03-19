<?php

class Driving implements TravelModeInterface {
    public function getETA() {
        return 10;
    }
    public function getDirection() {
        return "Go straight";
    }
}
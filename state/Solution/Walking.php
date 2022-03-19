<?php

class Walking implements TravelModeInterface {
    public function getETA() {
        return 5;
    }
    public function getDirection() {
        return "Walk straight";
    }
}
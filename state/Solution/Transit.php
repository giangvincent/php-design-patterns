<?php

class Transit implements TravelModeInterface {
    public function getETA() {
        return 3;
    }
    public function getDirection() {
        return "Take the bus";
    }
}
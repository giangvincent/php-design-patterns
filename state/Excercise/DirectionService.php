<?php

class DirectionService {
    private $travelMode;

    public function setTravelMode(TravelModeEnum $travelMode) {
        $this->travelMode = $travelMode;
    }

    public function getTravelMode() {
        return $this->travelMode;
    }

    public function getETA() {
        $travelMode = $this->getTravelMode();
        $eta = 0;
        switch ($travelMode) {
            case TravelModeEnum::DRIVING:
                $eta = 10;
                break;
            case TravelModeEnum::WALKING:
                $eta = 5;
                break;
            case TravelModeEnum::BICYCLING:
                $eta = 3;
                break;
            case TravelModeEnum::TRANSIT:
                $eta = 2;
                break;
        }
        return $eta;
    }

    public function getDirection() {
        $travelMode = $this->getTravelMode();
        $direction = "";
        switch ($travelMode) {
            case TravelModeEnum::DRIVING:
                $direction = "Go straight";
                break;
            case TravelModeEnum::WALKING:
                $direction = "Walk straight";
                break;
            case TravelModeEnum::BICYCLING:
                $direction = "Bike straight";
                break;
            case TravelModeEnum::TRANSIT:
                $direction = "Take the bus";
                break;
        }
        return $direction;
    }
}
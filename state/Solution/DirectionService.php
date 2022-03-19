<?php

class DirectService {
    private $travelMode;
    public function __construct(TravelModeInterface $travelMode) {
        $this->travelMode = $travelMode;
    }
    public function getETA() {
        return $this->travelMode->getETA();
    }
    public function getDirection() {
        return $this->travelMode->getDirection();
    }
}
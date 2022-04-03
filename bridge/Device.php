<?php

interface Device {
    public function turnOn();
    public function turnOff();
    public function setChannel($number);
}
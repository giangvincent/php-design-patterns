<?php

class SamSungTv implements Device {

    public function turnOn()
    {
        printf("Sony turn on");
    }

    public function turnOff()
    {
        printf("Sony turn off");
    }

    public function setChannel($number)
    {
        printf('Sony setChannel' . $number);
    }
}
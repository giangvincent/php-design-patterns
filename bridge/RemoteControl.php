<?php

class RemoteControl {

    protected $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function deviceTurnOn()
    {
        $this->device->turnOn();
    }

    public function deviceTurnOff()
    {
        $this->device->turnOff();
    }
}
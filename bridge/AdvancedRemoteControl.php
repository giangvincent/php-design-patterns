<?php

class AdvancedRemoteControl extends RemoteControl {

    public function __construct(Device $device)
    {
        parent::__construct($device);
    }

    public function deviceSetChannel($number)
    {
        $this->device->setChannel($number);
    }
}
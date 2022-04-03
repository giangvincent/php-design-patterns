<?php

class Main {

    public function run()
    {
        $device = new RemoteControl(new SonyTv());
        $device->deviceTurnOn();

        $newDevice = new AdvancedRemoteControl(new SamSungTv());
        $newDevice->deviceSetChannel(10);
    }
}
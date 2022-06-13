<?php

class Button extends UIControl {
    private $isEnabled;

    public function isEnabled() {
        return $this->isEnabled;
    }

    public function setEnabled($enabled) {
        $this->isEnabled = $enabled;
    }
}

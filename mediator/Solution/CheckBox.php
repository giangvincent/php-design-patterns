<?php

class CheckBox extends UIControl {
    private $isChecked;

    public function isChecked() {
        return $this->isChecked;
    }

    public function setChecked($checked) {
        $this->isChecked = $checked;
    }
}

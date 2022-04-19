<?php

class VideoEditor {
    private $contrast = 0.5;
    private $text;

    public function setText(String $text) {
        $this->text = $text;
    }

    public function removeText() {
        $this->text = "";
    }

    public function getContrast():float {
        return $this->contrast;
    }

    public function setContrast(float $contrast) {
        $this->contrast = $contrast;
    }

    // @Override
    public function __toString() {
        return "VideoEditor{" .
                "contrast=" . $this->contrast .
                ", text='" . $this->text . "'}\n";
    }
}
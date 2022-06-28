<?php

abstract class AbstractWindowHandler {

    final function close() {
        $this->preHandle();
        $this->closeWindow();
        $this->subHandle();
    }

    public function closeWindow()
    {
        echo ("Removing the window from the screen");
    }

    abstract public function preHandle();

    abstract public function subHandle();
}
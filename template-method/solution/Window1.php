<?php

class window1 extends AbstractWindowHandler {
    public function preHandle()
    {
        echo "This is previous Handler for window 1 close";
    }

    public function subHandle()
    {
        echo "This is subsequent Handler for afterward window 1 closed";
    }
}
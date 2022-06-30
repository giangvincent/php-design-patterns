<?php

abstract class AbstractFilter {
    public function reduceNoise() {
        echo ("Reduce noise");
    }

    public function addReverb() {
        echo ("Add reverb");
    }

    public function normalize() {
        echo ("Normalize");
    }
}
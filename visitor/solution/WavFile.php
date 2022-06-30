<?php

class WavFile {
    private $segments = array();

    public static function read($fileName) {
        // Simulate reading a wav file and building the segments
        $wavFile = new WavFile();
        self::$segments[] = new FormatSegment();
        self::$segments[] = new FactSegment();
        self::$segments[] = new FactSegment();
        self::$segments[] = new FactSegment();

        return $wavFile;
    }

    public function reduceNoise() {
        foreach ($this->segments as $segment)
            $segment->reduceNoise();
    }

    public function addReverb() {
        foreach ($this->segments as $segment)
            $segment->addReverb();
    }

    public function normalize() {
        foreach ($this->segments as $segment)
            $segment->normalize();
    }
}

<?php

class Image implements Element {
    private $source;

    public function __construct(String $source) {
        $this->source = $source;
    }

    public function getSource() {
        return $this->source;
    }
}

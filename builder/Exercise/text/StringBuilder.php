<?php

class StringBuilder {
    private $elements = [];

    public function add(String $element) {
        $this->elements[] = $element;
    }

    public function toString() {
        $builder = '';
        foreach ($this->elements as $element) {
            $builder .= $element ."\n";
        }

        return $builder;
    }
}

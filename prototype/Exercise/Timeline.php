<?php

class Timeline {
    private $components = array();

    public function add(Component $component) {
        $this->components[] = $component;
    }
}

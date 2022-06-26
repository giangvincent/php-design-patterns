<?php
require_once 'Component.php';

class Timeline {
    private $components = array();

    public function add(Component $component) {
        $this->components[] = $component;
    }

    public function getComponentsContent() {
        foreach ($this->components as $component) {
            echo $component->getContent() . "\n";
        }
    }
}

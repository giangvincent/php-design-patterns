<?php

class ContextMenu {
    private $timeline;

    public function __construct(Timeline $timeline) {
        $this->timeline = $timeline;
    }

    public function duplicate(Component $component) {
        if ($component instanceof Text) {
            $source = $component;
            $target = new Text($source->getContent());
            $this->timeline->add($target);
        }
        else if ($component instanceof Audio) {
            // Logic for duplicating an Audio object
        }
        else if ($component instanceof Clip) {
            // Logic for duplicating a Clip object
        }
    }
}

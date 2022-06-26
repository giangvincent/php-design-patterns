<?php
require_once 'Component.php';
require_once 'Timeline.php';

class ContextMenu {
    private $timeline;

    public function __construct(Timeline $timeline) {
        $this->timeline = $timeline;
    }

    public function duplicate(Component $component) {
        $component->addToTimeline($this->timeline);
    }
}

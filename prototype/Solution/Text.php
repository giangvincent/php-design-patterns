<?php
require_once 'Component.php';
require_once 'Timeline.php';

class Text implements Component {
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function addToTimeline(Timeline $timeline) {
        $timeline->add($this->clone());
    }

    public function clone() {
        return new Text($this->content);
    }
}

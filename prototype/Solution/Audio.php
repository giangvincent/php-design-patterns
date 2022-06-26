<?php
require_once 'Component.php';
require_once 'Timeline.php';

class Audio implements Component {
    private $content;

    function __construct ($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function addToTimeline(Timeline $timeline) {
        $timeline->add($this->clone());
    }

    public function clone() {
        return new Audio($this->content);
    }
}

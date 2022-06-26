<?php

interface Component {
    public function addToTimeline(Timeline $timeline);
    public function clone();
    public function getContent();
}

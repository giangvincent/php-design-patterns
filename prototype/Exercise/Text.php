<?php

class Text implements Component {
    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}

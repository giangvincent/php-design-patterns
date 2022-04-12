<?php

class Text implements Element {
    private $content;

    public function __construct(String $content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}

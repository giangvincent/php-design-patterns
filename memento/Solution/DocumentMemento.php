<?php

final class DocumentMemento {
    private $content;
    private $fontName;
    private $fontSize;

    public function __construct($content, $fontName, $fontSize) {
        $this->content = $content;
        $this->fontName = $fontName;
        $this->fontSize = $fontSize;
    }

    public function getContent() {
        return $this->content;
    }

    public function getFontName() {
        return $this->fontName;
    }

    public function getFontSize() {
        return $this->fontSize;
    }
}
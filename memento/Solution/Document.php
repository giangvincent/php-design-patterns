<?php

class Document {
    private $content;
    private $fontName;
    private $fontSize;

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getFontName() {
        return $this->fontName;
    }

    public function setFontName($fontName) {
        $this->fontName = $fontName;
    }

    public function getFontSize() {
        return $this->fontSize;
    }

    public function setFontSize($fontSize) {
        $this->fontSize = $fontSize;
    }

    public function toString() {
        return "Document: " . $this->content . " " . $this->fontName . " " . $this->fontSize;
    }

    public function createMemento() {
        return new DocumentMemento($this->content, $this->fontName, $this->fontSize);
    }

    public function restore(DocumentMemento $memento) {
        $this->content = $memento->getContent();
        $this->fontName = $memento->getFontName();
        $this->fontSize = $memento->getFontSize();
    }
}
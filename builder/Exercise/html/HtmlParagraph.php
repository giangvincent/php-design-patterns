<?php
require_once 'HtmlElement.php';

class HtmlParagraph extends HtmlElement {
    private $text;

    public function __construct(String $text) {
        $this->text = $text;
    }

    public function toString() {
        return sprintf("<p>%s</p>", $this->text);
    }
}

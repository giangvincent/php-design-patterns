<?php
require_once 'HtmlElement.php';

class HtmlDocument {
    private $elements = [];

    public function add(HtmlElement $element) {
        $this->elements[] = $element;
    }

    public function toString() {
        $builder = '';
        $builder .= "<html>";
        foreach ($this->elements as $element) {
            $builder .= $element->toString();
        }

        $builder .= "</html>";
        return $builder;
    }
}

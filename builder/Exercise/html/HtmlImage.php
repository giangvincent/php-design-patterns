<?php

class HtmlImage extends HtmlElement {
    private $source;

    public function __construct(string $source)
    {
        $this->source = $source;
    }

    public function toString() {
        return sprintf("<img src=\"%s\" />", $this->source);
    }
}

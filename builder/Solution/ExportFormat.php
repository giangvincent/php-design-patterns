<?php
require_once 'Element.php';

interface ExportFormat {
    public function reset();
    public function addText(Text $text);
    public function addImage(Image $image);
    public function getContent();
}
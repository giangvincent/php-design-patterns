<?php
require_once './ExportFormat.php';
require_once 'StringBuilder.php';
require_once 'Text.php';
require_once 'Image.php';

class TextExport implements ExportFormat
{
    private $builder;

    public function reset()
    {
        $this->builder = new StringBuilder();
    }

    public function addText(Text $text)
    {
        $this->builder->add($text->getContent());
    }

    public function addImage(Image $image)
    {

    }
    public function getContent()
    {
        return $this->builder->toString();
    }
}

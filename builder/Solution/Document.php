<?php

require_once 'Element.php';
require_once 'ExportFormat.php';
require_once 'Text.php';
require_once 'Image.php';

class Document
{
    private $elements = [];

    public function add(Element $element)
    {
        $this->elements[] = $element;
    }

    public function export(ExportFormat $formatBuilder, String $fileName)
    {
        $formatBuilder->reset();
        foreach($this->elements as $element) {
            if ($element instanceof Text) {
                $formatBuilder->addText($element);
            } elseif ($element instanceof Image) {
                $formatBuilder->addImage($element);
            }
        }

        $myfile = fopen($fileName, "w") or die("Unable to open file!");
        fwrite($myfile, $formatBuilder->getContent());
        fclose($myfile);
    }
}

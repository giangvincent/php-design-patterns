<?php

require_once 'Element.php';
require_once 'ExportFormat.php';

class Document
{
    private $elements = [];

    public function add(Element $element)
    {
        $this->elements[] = $element;
    }

    public function export(ExportFormat $format, String $fileName)
    {
        $content = $format->getContent($this->elements);

        $myfile = fopen($fileName, "w") or die("Unable to open file!");
        fwrite($myfile, $content);
        fclose($myfile);
    }
}

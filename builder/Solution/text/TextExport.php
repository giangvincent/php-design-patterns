<?php
require_once './ExportFormat.php';
require_once 'StringBuilder.php';
require_once 'Text.php';
require_once 'Element.php';

class TextExport implements ExportFormat
{

    public function getContent($elements)
    {
        $builder = new StringBuilder();

        foreach ($elements as $element) {
            if ($element instanceof Text) {
                $text = $element->getContent();
                $builder->add($text);
            }
        }

        return $builder->toString();
    }
}

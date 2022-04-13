<?php
require_once './ExportFormat.php';
require_once 'HtmlDocument.php';
require_once 'HtmlParagraph.php';
require_once 'HtmlImage.php';
require_once 'Text.php';
require_once 'Image.php';
require_once 'Element.php';

class HtmlExport implements ExportFormat
{

    public function getContent($elements)
    {
        $document = new HtmlDocument();

        foreach ($elements as $element) {
            if ($element instanceof Text) {
                $text = $element->getContent();
                $document->add(new HtmlParagraph($text));
            } else if ($element instanceof Image) {
                $source = $element->getSource();
                $document->add(new HtmlImage($source));
            }
        }

        return $document->toString();
    }
}

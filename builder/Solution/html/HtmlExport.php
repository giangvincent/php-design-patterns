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
    private $document;
    public function reset()
    {
        $this->document = new HtmlDocument();
    }

    public function addText(Text $text)
    {
        $this->document->add(new HtmlParagraph($text->getContent()));
    }

    public function addImage(Image $image)
    {
        $this->document->add(new HtmlImage($image->getSource()));
    }

    public function getContent()
    {
        return $this->document->toString();
    }
}

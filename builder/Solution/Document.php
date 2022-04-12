<?php
require_once 'html/HtmlDocument.php';
require_once 'html/HtmlParagraph.php';
require_once 'html/HtmlImage.php';
require_once 'Element.php';
require_once 'Text.php';
require_once 'Image.php';
require_once 'text/StringBuilder.php';

class Document
{
    private $elements = [];
    const EXPORT_FORMAT_HTML = 'html';
    const EXPORT_FORMAT_TEXT = 'text';

    public function add(Element $element)
    {
        $this->elements[] = $element;
    }

    public function export($format, String $fileName)
    {
        $content = "";

        if ($format === self::EXPORT_FORMAT_HTML) {
            $document = new HtmlDocument();

            foreach ($this->elements as $element) {
                if ($element instanceof Text) {
                    $text = $element->getContent();
                    $document->add(new HtmlParagraph($text));
                } else if ($element instanceof Image) {
                    $source = $element->getSource();
                    $document->add(new HtmlImage($source));
                }
            }

            $content = $document->toString();
        } else if ($format === self::EXPORT_FORMAT_TEXT) {
            $builder = new StringBuilder();

            foreach ($this->elements as $element) {
                if ($element instanceof Text) {
                    $text = $element->getContent();
                    $builder->add($text);
                }
            }

            $content = $builder->toString();
        }

        $myfile = fopen($fileName, "w") or die("Unable to open file!");
        fwrite($myfile, $content);
        fclose($myfile);
    }
}

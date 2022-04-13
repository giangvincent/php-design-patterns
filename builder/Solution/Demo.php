<?php
require_once 'Document.php';
require_once 'html/HtmlExport.php';
require_once 'text/TextExport.php';

class Demo {
    public static function show() {
        $document = new Document();
        $document->add(new Text("Hello World"));
        $document->add(new Image("pic1.jpg"));

        $document->export(new HtmlExport(), "export.html");

        // Only writes the text elements to the file
        $document->export(new TextExport(), "export.txt");
    }
}

$demo = new Demo();
$demo->show();

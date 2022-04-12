<?php
require_once 'Document.php';

class Demo {
    public static function show() {
        $document = new Document();
        $document->add(new Text("Hello World"));
        $document->add(new Image("pic1.jpg"));

        $document->export(Document::EXPORT_FORMAT_HTML, "export.html");

        // Only writes the text elements to the file
        $document->export(Document::EXPORT_FORMAT_TEXT, "export.txt");
    }
}

$demo = new Demo();
$demo->show();

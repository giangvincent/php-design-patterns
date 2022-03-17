<?php

require_once 'Document.php';
require_once 'DocumentMemento.php';
require_once 'History.php';

$document = new Document();
$history = new History();

$document->setContent('Hello World');
$history->push($document->createMemento());

$document->setFontName('Arial');
$history->push($document->createMemento());

$document->setFontSize(12);

echo $document->toString();

$document->restore($history->pop());
echo $document->toString();

$document->restore($history->pop());
echo $document->toString();

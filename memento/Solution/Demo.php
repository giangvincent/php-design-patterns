<?php

require_once 'Document.php';
require_once 'DocumentMemento.php';
require_once 'History.php';

$document = new Document();
$history = new History();

$document->setContent('Hello World');
$history->save($document);

$document->setFontName('Arial');
$history->save($document);

$document->setFontSize(12);

echo $document->toString();

$document->restore($history->undo($document));
echo $document->toString();

$document->restore($history->undo($document));
echo $document->toString();

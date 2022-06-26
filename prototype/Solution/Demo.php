<?php
require_once 'ContextMenu.php';
require_once 'Timeline.php';
require_once 'Text.php';
require_once 'Audio.php';
require_once 'Clip.php';

$text = new Text('This is text');
$audio = new Audio('Audio added');
$clip = new Clip('Clip added');

$timeline = new Timeline();
$contextMenu = new ContextMenu($timeline);

$timeline->add($text);
$timeline->add($audio);
$timeline->add($clip);

$contextMenu->duplicate($text);
$contextMenu->duplicate($audio);
$contextMenu->duplicate($clip);

$timeline->getComponentsContent();
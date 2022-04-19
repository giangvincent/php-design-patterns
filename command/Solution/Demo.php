<?php
require_once 'VideoEditor.php';
require_once 'History.php';
require_once 'SetContrastCommand.php';
require_once 'SetTextCommand.php';
require_once 'UndoCommand.php';

$videoEditor = new VideoEditor();
$history = new History();

$constrastCommand = new SetContrastCommand(5, $videoEditor, $history);
$constrastCommand->execute();
printf($videoEditor);

$textCommand = new SetTextCommand('Video title', $videoEditor, $history);
$textCommand->execute();
printf($videoEditor);

$undoCommand = new UndoCommand($history);
$undoCommand->execute();
printf($videoEditor);

$undoCommand->execute();
printf($videoEditor);

$undoCommand->execute();
printf($videoEditor);
<?php
require_once 'VideoEditor.php';
require_once 'History.php';
require_once 'AbstractUndoableCommand.php';

class SetTextCommand extends AbstractUndoableCommand {
    private $text;

    public function __construct(
        $text,
        VideoEditor $videoEditor,
        History $history
    )
    {
        $this->text = $text;
        parent::__construct($videoEditor, $history);
    }

    public function doExecute()
    {
        $this->videoEditor->setText($this->text);
    }

    public function undo()
    {
        $this->videoEditor->removeText();
    }
}
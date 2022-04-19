<?php
require_once 'VideoEditor.php';
require_once 'History.php';
require_once 'AbstractUndoableCommand.php';

class SetContrastCommand extends AbstractUndoableCommand {
    private $prevContrast;
    private $contrast;

    public function __construct(
        $contrast,
        VideoEditor $videoEditor,
        History $history
    )
    {
        $this->prevContrast = $videoEditor->getContrast();
        $this->contrast = $contrast;
        parent::__construct($videoEditor, $history);
    }

    public function doExecute()
    {
        $this->videoEditor->setContrast($this->contrast);
    }

    public function undo()
    {
        $this->videoEditor->setContrast($this->prevContrast);
    }
}
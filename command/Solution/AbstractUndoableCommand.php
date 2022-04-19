<?php
require_once 'VideoEditor.php';
require_once 'History.php';
require_once 'UndoableCommandInterface.php';

abstract class AbstractUndoableCommand implements UndoableCommandInterface {
    protected $videoEditor;
    protected $hitory;

    public function __construct(
        VideoEditor $videoEditor,
        History $hitory
    )
    {
        $this->videoEditor = $videoEditor;
        $this->history = $hitory;
    }

    public function execute()
    {
        $this->doExecute();

        $this->history->push($this);
    }

    abstract public function doExecute();
}
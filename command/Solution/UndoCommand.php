<?php
require_once 'History.php';
require_once 'CommandInterface.php';

class UndoCommand implements CommandInterface {

    private $history;

    public function __construct(History $history)
    {
        $this->history = $history;
    }

    public function execute()
    {
        if ($this->history->getSize() > 0) {
            $this->history->pop()->undo();
        }
    }
}
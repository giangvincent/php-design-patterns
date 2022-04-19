<?php
require_once 'UndoableCommandInterface.php';

class History {

    private $commands = [];

    public function push(UndoableCommandInterface $command)
    {
        $this->commands[] = $command;
    }

    public function pop()
    {
        return array_pop($this->commands);
    }

    public function getSize()
    {
        return count($this->commands);
    }
}
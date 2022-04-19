<?php
require_once 'CommandInterface.php';

interface UndoableCommandInterface extends CommandInterface {
    public function undo();
}
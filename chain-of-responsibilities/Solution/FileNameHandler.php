<?php

abstract class FileNameHandler {

    private $nextHandler;

    public function __construct($nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public function fileHandle($fileName)
    {
        if ($this->doHandler($fileName)) {
            return;
        }

        if($this->nextHandler !== null) {
            $this->nextHandler->fileHandle($fileName);
        }
    }

    abstract public function doHandler($fileName);

    public function endsWith( $needle, $haystack) {
        $length = strlen( $needle );
        if( !$length ) {
            return true;
        }
        return substr( $haystack, -$length ) === $needle;
    }
}
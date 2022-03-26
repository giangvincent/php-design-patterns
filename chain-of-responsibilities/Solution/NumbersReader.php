<?php

class NumbersReader extends FileNameHandler {

    public function __construct(FileNameHandler $nextHandler)
    {
        parent::__construct($nextHandler);
    }

    public function doHandler($fileName)
    {
        printf("Called Numbers reader.\n");
        if ($this->endsWith(".numbers", $fileName)) {
            printf("Reading data from a Numbers spreadsheet.\n");

            return true;
        }

        return false;
    }
}
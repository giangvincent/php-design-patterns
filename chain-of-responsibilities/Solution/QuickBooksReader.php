<?php

class QuickBooksReader extends FileNameHandler {

    public function __construct(FileNameHandler $nextHandler)
    {
        parent::__construct($nextHandler);
    }

    public function doHandler($fileName)
    {
        printf("Called QuickBooks reader.\n");
        if ($this->endsWith(".qbw", $fileName)) {
            printf("Reading data from a QuickBooks file.\n");

            return true;
        }

        return false;
    }
}
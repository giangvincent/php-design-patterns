<?php

class ExcelReader extends FileNameHandler {

    public function __construct(FileNameHandler $nextHandler)
    {
        parent::__construct($nextHandler);
    }

    public function doHandler($fileName)
    {
        printf("Called Excel reader.\n");
        if ($this->endsWith(".xls", $fileName)) {
            printf("Reading data from an Excel spreadsheet.\n");
            return true;
        }

        return false;
    }
}
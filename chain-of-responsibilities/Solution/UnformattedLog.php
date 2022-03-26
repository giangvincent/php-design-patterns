<?php

class UnformattedLog extends FileNameHandler {

    public function doHandler($fileName)
    {
        printf("File format not supported.\n");

        return true;
    }
}
<?php

class DataReader {

    public function read(String $fileName)
    {
        if (str_ends_with(".xls", $fileName)) {
            printf("Reading data from an Excel spreadsheet.");
        }
        else if (str_ends_with(".numbers", $fileName)) {
            printf("Reading data from a Numbers spreadsheet.");
        }
        else if (str_ends_with(".qbw", $fileName)) {
            printf("Reading data from a QuickBooks file.");
        }
        else
            printf("File format not supported.");
    }
}
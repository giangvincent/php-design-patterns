<?php

require_once 'FileNameHandler.php';
require_once 'ExcelReader.php';
require_once 'NumbersReader.php';
require_once 'QuickBooksReader.php';
require_once 'UnformattedLog.php';
class DataReader {

    private $fileHandler;

    public function __construct(FileNameHandler $handler)
    {
        $this->fileHandler = $handler;
    }
    public function read(String $fileName)
    {
        $this->fileHandler->fileHandle($fileName);
    }
}

$unformatter = new UnformattedLog(null);
$quickBookReader = new QuickBooksReader($unformatter);
$numberReader = new NumbersReader($quickBookReader);
$excelReader = new ExcelReader($numberReader);

$dataReader = new DataReader($excelReader);
$dataReader->read('abc.xls');
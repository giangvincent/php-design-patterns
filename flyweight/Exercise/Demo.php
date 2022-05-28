<?php
require_once 'SpreadSheet.php';

class Demo {
  public static function show() {
    $sheet = new SpreadSheet();
    $sheet->setContent(0, 0, "Hello");
    $sheet->setContent(1, 0, "World");
    $sheet->setFontFamily(0, 0, "Arial");
    $sheet->render();
  }
}

Demo::show();
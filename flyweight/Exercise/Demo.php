<?php
require_once 'SpreadSheet.php';

class Demo
{
  public static function show()
  {
    $sheet = new SpreadSheet();
    $sheet->setContent(0, 0, "Hello");
    $sheet->setContent(1, 0, "World");
    $sheet->setFontFamily(0, 0, "Arial");
    $sheet->render();
    printf(self::convert(memory_get_usage(true)));
  }

  static function convert($size)
  {
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
  }
}

Demo::show();

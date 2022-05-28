<?php
require_once 'Cell.php';

class SpreadSheet {
  const MAX_ROWS = 3;
  const MAX_COLS = 3;

  // In a real app, these values should not be hardcoded here.
  // They should be read from a configuration file.
  const FONT_FAMILY = "Times New Roman";
  const FONT_SIZE = 12;
  const IS_BOLD = false;

  private $cells = array();

  public function __construct() {
    $this->generateCells();
  }

  public function setContent($row, $col, $content) {
    $this->ensureCellExists($row, $col);

    $this->cells[$row][$col]->setContent($content);
  }

  public function setFontFamily($row, $col, $fontFamily) {
    $this->ensureCellExists($row, $col);

    $this->cells[$row][$col]->setFontFamily($fontFamily);
  }

  private function ensureCellExists($row, $col) {
    if ($row < 0 || $row >= self::MAX_ROWS)
      throw new \Exception('Illegal Argument');

    if ($col < 0 || $col >= self::MAX_COLS)
    throw new \Exception('Illegal Argument');
  }

  private function generateCells() {
    for ($row = 0; $row < self::MAX_ROWS; $row++)
      for ($col = 0; $col < self::MAX_COLS; $col++) {
        $cell = new Cell($row, $col);
        $cell->setFontFamily(self::FONT_FAMILY);
        $this->cells[$row][$col] = $cell;
      }
  }

  public function render() {
    for ($row = 0; $row < self::MAX_ROWS; $row++)
      for ($col = 0; $col < self::MAX_COLS; $col++)
      $this->cells[$row][$col]->render();
  }
}

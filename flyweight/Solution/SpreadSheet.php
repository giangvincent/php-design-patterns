<?php
require_once 'Cell.php';

class SpreadSheet
{
  const MAX_ROWS = 3;
  const MAX_COLS = 3;
  private $cellContextFactory;
  private $cells = array();

  public function __construct(CellContextFactory $cellContextFactory)
  {
    $this->cellContextFactory = $cellContextFactory;

    $this->generateCells();
  }

  public function setContent($row, $col, $content)
  {
    $this->ensureCellExists($row, $col);

    $this->cells[$row][$col]->setContent($content);
  }

  public function setFontFamily($row, $col, $fontFamily)
  {
    $this->ensureCellExists($row, $col);

    $cell = $this->cells[$row][$col];
    $currentContext = $cell->getContext();
    $context = $this->cellContextFactory->getContext(
      $fontFamily,
      $currentContext->getFontSize(),
      $currentContext->isBold()
    );
    $this->cells[$row][$col]->setContext($context);
  }

  private function ensureCellExists($row, $col)
  {
    if ($row < 0 || $row >= self::MAX_ROWS)
      throw new \Exception('Illegal Argument');

    if ($col < 0 || $col >= self::MAX_COLS)
      throw new \Exception('Illegal Argument');
  }

  private function generateCells()
  {
    for ($row = 0; $row < self::MAX_ROWS; $row++)
      for ($col = 0; $col < self::MAX_COLS; $col++) {
        $this->cells[$row][$col] = new Cell($row, $col, $this->getDefaultContext());
      }
  }

  private function getDefaultContext()
  {
    // In a real app, these values should not be hardcoded here.
    // They should be read from a configuration file.
    return new CellContext("Times New Roman", 12, false);
  }

  public function render()
  {
    for ($row = 0; $row < self::MAX_ROWS; $row++)
      for ($col = 0; $col < self::MAX_COLS; $col++)
        $this->cells[$row][$col]->render();
  }
}

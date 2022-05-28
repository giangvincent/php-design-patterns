<?php
require_once 'CellContext.php';

class Cell
{
  private $row;
  private $column;
  private $content;
  private $cellContext;

  public function __construct($row, $column, CellContext $cellContext)
  {
    $this->row = $row;
    $this->column = $column;
    $this->cellContext = $cellContext;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContext()
  {
    return $this->cellContext;
  }

  public function setContext(CellContext $context)
  {
    $this->cellContext = $context;
  }

  public function render()
  {
    echo sprintf("(%d, %d): %s [%s]\n", $this->row, $this->column, $this->content, $this->cellContext->getFontFamily());
  }
}

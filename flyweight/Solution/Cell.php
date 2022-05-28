<?php

class Cell {
  private $row;
  private $column;
  private $content;
  private $fontFamily;
  private $fontSize;
  private $isBold;

  public function __construct($row, $column) {
    $this->row = $row;
    $this->column = $column;
  }

  public function getContent() {
    return $this->content;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  public function getFontFamily() {
    return $this->fontFamily;
  }

  public function setFontFamily($fontFamily) {
    $this->fontFamily = $fontFamily;
  }

  public function getFontSize() {
    return $this->fontSize;
  }

  public function setFontSize($fontSize) {
    $this->fontSize = $fontSize;
  }

  public function isBold() {
    return $this->isBold;
  }

  public function setBold($bold) {
    $this->isBold = $bold;
  }

  public function render() {
    echo sprintf("(%d, %d): %s [%s]\n", $this->row, $this->column, $this->content, $this->fontFamily);
  }
}

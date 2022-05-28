<?php

class CellContext
{
    private $fontFamily;
    private $fontSize;
    private $isBold;

    public function __construct($fontFamily, $fontSize, $isBold)
    {
        $this->fontFamily = $fontFamily;
        $this->fontSize = $fontSize;
        $this->isBold = $isBold;
    }

    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    public function getFontSize()
    {
        return $this->fontSize;
    }

    public function isBold()
    {
        return $this->isBold;
    }
}

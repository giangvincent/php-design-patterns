<?php
require_once 'CellContext.php';

class CellContextFactory {

    private $contexts = array();

    public function getContext($fontFamily, $fontSize, $isBold)
    {
        $contextKey = 'Cell_' . $fontFamily . '_' . $fontSize . '_' . ($isBold ? 1 : 0);

        if(!isset($this->contexts[$contextKey])) {
            echo "Creating a cell ".$contextKey;
            echo "\n";
            $this->contexts[$contextKey] = new CellContext($fontFamily, $fontSize, $isBold);
        }

        return $this->contexts[$contextKey];
    }
}
<?php
require_once 'ProductCollection.php';
require_once 'ProductIteratorInterface.php';

class ListProduct implements ProductIteratorInterface {
    /**
     * array
     */
    private $productCollection;
    private $index = 0;

    public function hasNext() {
        return $this->index < $this->productCollection->getSize();
    }
    public function current() {
        return $this->productCollection[$this->index];
    }
    public function next() {
        $this->index++;
    }
}
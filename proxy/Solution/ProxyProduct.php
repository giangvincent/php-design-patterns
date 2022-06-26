<?php
require_once "Product.php";
require_once "DbContext.php";
require_once "ProductInterface.php";

class ProxyProduct implements ProductInterface {
    private $product;
    private $dbContext;

    public function __construct(Product $product, DbContext $dbContext)
    {
        $this->product = $product;
        $this->dbContext = $dbContext;
    }

    public function setName($name) {
        $this->product->setName($name);
        $this->dbContext->markAsChanged($this->product);
    }
}
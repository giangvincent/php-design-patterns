<?php
require_once "Product.php";
require_once "DbContext.php";

class ProxyProduct extends Product {
    private $dbContext;

    public function __construct($id, DbContext $dbContext)
    {
        $this->dbContext = $dbContext;
        parent::__construct($id);
    }

    public function setNameProxy($name) {
        $this->setName($name);
        $this->dbContext->markAsChanged($this);
    }
}
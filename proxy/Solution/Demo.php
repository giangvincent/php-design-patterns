<?php
require_once "DbContext.php";
require_once "ProxyProduct.php";

class Demo {
  public static function show() {
    $dbContext = new DbContext();

    // We read an object (eg a product) from a database.
    $product = $dbContext->getProduct(1);

    $proxyProduct = new ProxyProduct($product, $dbContext);

    // We modify the properties of the object in memory.
    $proxyProduct->setName("Updated Name");

    // DbContext should keep track of changed objects in memory.
    // When we call saveChanges(), it'll automatically generate
    // the right SQL statements to update our database.
    $dbContext->saveChanges();

    // After saving the changes to the database, we can
    // change our in-memory object again and save the changes.
    $proxyProduct->setName("Another name");
    $dbContext->saveChanges();
  }
}


$demo = new Demo();
$demo->show();
<?php

class DbContext {
  private $updatedObjects = array();

  public function getProduct($id) {
    // Automatically generate SQL statements
    // to read the product with the given ID.
    sprintf("SELECT * FROM products WHERE product_id = %d \n", $id);

    // Simulate reading a product object from a database.
    $product = new Product($id);
    $product->setName("Product 1");

    return $product;
  }

  public function saveChanges() {
    // Automatically generate SQL statements
    // to update the database.
    foreach ($this->updatedObjects as $updatedObject)
      sprintf(
        "UPDATE products SET name = '%s' WHERE product_id = %d \n",
        $updatedObject->getName(),
        $updatedObject->getId()
      );

    $this->updatedObjects = array();
  }

  public function markAsChanged(Product $product) {
    $updatedObjects[] = $product;
  }

}
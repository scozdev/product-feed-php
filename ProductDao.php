<?php
require './Product.php';

class ProductDAO
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllProducts()
    {
        $stmt = $this->db->prepare("SELECT id, name, price, category FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll();
        $productList = [];
        foreach ($products as $product) {
                $productList[] = new Product($product["id"], $product["name"], $product["price"], $product["category"]);
        }
        return $productList;
    }

    public function getProductById($id)
    {
        // Retrieve a product by its ID from the data source
        // ...
    }

    public function addProduct(Product $product)
    {
        // Add a new product to the data source
        // ...
    }

    public function updateProduct(Product $product)
    {
        // Update an existing product in the data source
        // ...
    }

    public function deleteProduct($id)
    {
        // Delete a product from the data source
        // ...
    }
}
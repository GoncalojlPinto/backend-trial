<?php

require_once './Sql_connections/MySqlAbstractRepository.php';
require_once 'models/Product.php';

class productController extends MysqlAbstractRepository{

    public function findAll() : array
    {
        $query = "Select * from ". Product::DB_TABLE_NAME;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $rows = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $products = [];
        foreach ($rows as $product) {
            $products[] = new Product($product['product_id'], $product['name'], $product['sku'], $product['categories'], $product['price']);
        }
        
        return $products;
    }

    public function delete(int $id) : bool
    {
        $query = "DELETE FROM ".Product::DB_TABLE_NAME." WHERE product_id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id); 
        return $stmt->execute();
    }

    public function update(Product $product)
    {
        $query = "UPDATE ".Product::DB_TABLE_NAME."SET name=?,sku=?,categories=?,price=?) WHERE product_id = ?";
        $stmt = $this->connection->prepare($query); 
        return $stmt->execute([$product->getName(), $product->skuGenerator(), $product->getCategories(), $product->getPrice()]);
    }

    public function create(Product $product) : bool
    {
        $query = "INSERT INTO ".Product::DB_TABLE_NAME."(name,sku,categories,price) VALUES(?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query); 
        return $stmt->execute([$product->getName(), $product->skuGenerator(), $product->getCategories(), $product->getPrice()]);
    }

}

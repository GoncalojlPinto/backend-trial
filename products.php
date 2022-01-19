<?php

require_once 'database/database.php';
require_once './controllers/productController.php';

$productController = new productController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    $product = new Product(null, $_POST["name"], $_POST["sku"],  $_POST["categories"], $_POST["price"]);

    if (!$productController->create($product)) {
        $error_message = "Error inserting product";
    }


}


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['delete']) && $_GET['delete'] > 0) {
        if (!$productController->delete($_GET['delete'])) {
            $error_message = "Error deleting product";
        }
    }

}

if(isset($_POST['update']) && $_GET['update'] > 0)
{
    if (isset($_GET['update']) && $_GET['update'] > 0) {
        if (!$productController->update($product, $id)) {
            $error_message = "Error deleting product";
        }
    }
}

$products = $productController->findAll();

require_once 'views/header.html';
require_once 'views/products/index.phtml';
require_once 'views/footer.html';
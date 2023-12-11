<?php
    session_start();

    require '../classes/Product.php';

    $product_obj = new Product;
    $product->delete($_SESSION['id']);

    
?>
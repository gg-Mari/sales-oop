<?php
include "../classes/product.php";
session_start();

// Create an obj
$product = new Product;

$product->delete($_SESSION['id']);
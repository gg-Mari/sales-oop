<?php
include "../classes/Product.php";
session_start();

// Create an obj
$product = new Product;

$product->store($_POST);
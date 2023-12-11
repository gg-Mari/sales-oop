<?php
include "../classes/Product.php";
session_start();

// Create an obj
$product = new Product;

$product->update($_POST);
<?php
include_once('../../inc/crud.php');

$products = null;
$product = null;


function index() {
    global $product;
    $products = find_all('produtos'); 
}
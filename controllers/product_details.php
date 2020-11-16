<?php
session_start();
?>
<?php

$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true ? true : false;
$product = $app['queryBuilder']->selectOne('products',$_GET['id']);
// var_dump($product);
require "views/product_details.view.php";
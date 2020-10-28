<?php

$product = $app['queryBuilder']->selectOne('products',$_GET['id']);
// var_dump($product);
require "views/product_details.view.php";
<?php

$products = $app['queryBuilder']->selectSome('products',9,$_GET['index']);
echo json_encode($products);
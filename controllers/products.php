<?php


$sort_By =  array_key_exists('sortBy',$_GET)? $_GET['sortBy'] : 'id';
$category_name = array_key_exists("category_name",$_GET)? $_GET['category_name'] : 'category_name';
$lPrice = array_key_exists("lPrice",$_GET)? $_GET['lPrice'] : 'price';
$uPrice = array_key_exists("uPrice",$_GET)? $_GET['uPrice'] : 'price';
$search_term = array_key_exists('search',$_GET)? $_GET['search'] : 'name';

$table = array_key_exists('sortBy',$_GET)? $_GET['sortBy']==='best'? 'orders' : 'products' : 'products';
$join_products_orders = $table === "orders"? "INNER JOIN products ON orders.product_id=products.id" : "";
$where_clause = "WHERE category_name = $category_name AND name LIKE $search_term AND price >= $lPrice AND price <= $uPrice";
$order_bestseling = $table === "orders"? "GROUP BY product_id ORDER BY COUNT(*) DESC" : "";
$order_all_or_new = $table === "products"? $sort_By === 'id'? "ORDER BY $sort_By ASC" : "ORDER BY $sort_By DESC" :"";

$index = array_key_exists('index',$_GET)? $_GET['index'] : 0;

$products = $app['queryBuilder']->selectSome($table,$join_products_orders,$where_clause,$order_bestseling,$order_all_or_new,9,$index);
echo json_encode($products);

// echo "select * from $table $join_products_orders $where_clause $order_bestseling $order_all_or_new ";
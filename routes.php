<?php

// $router -> define( [
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'services' => 'controllers/services.php',
//     'cleaning' => 'controllers/services.php',
//     'personnel' => 'controllers/personnel_support.php',
//     'environmental' => 'controllers/environmental_services.php',
//     'training' => 'controllers/training.php',
//     'shop' => 'controllers/shop.php',
//     'contact' => 'controllers/contact.php',
// ]);

// GET REQUESTS
$router -> get('' , 'controllers/index.php');
$router -> get ('about' , 'controllers/about.php');
$router -> get ('services' , 'controllers/services.php');
$router -> get ('cleaning' , 'controllers/services.php');
$router -> get ('personnel' , 'controllers/personnel_support.php');
$router -> get ('environmental' , 'controllers/environmental_services.php');
$router -> get ('training' , 'controllers/training.php');
$router -> get ('shop' , 'controllers/shop.php');
$router -> get ('contact' , 'controllers/contact.php');
$router -> get('api','controllers/api-test.php');
$router -> get('products','controllers/products.php');

// POST REQUESTS
$router -> post('contact_process', 'controllers/contact_process.php');

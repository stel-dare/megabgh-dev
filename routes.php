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
$router -> get('product_details','controllers/product_details.php');

// AUTH GET REQUESTS
$router -> get('login','controllers/auth/login.php');
$router -> get('register','controllers/auth/register.php');
$router -> get('email', 'controllers/auth/email.php');
$router -> get('reset_password', 'controllers/auth/reset_password.php');


// POST REQUESTS

// AUTH POST REQUEST
$router -> post('contact_process', 'controllers/contact_process.php');
$router -> post('auth_user', 'controllers/auth/auth_user.php');
$router -> post('register_user', 'controllers/auth/register_user.php');
$router -> post('auth_email', 'controllers/auth/auth_email.php');


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
$router -> get ('shop' , 'controllers/shop.php');
$router -> get ('contact' , 'controllers/contact.php');
$router -> get('api','controllers/api-test.php');
$router -> get('products','controllers/products.php');
$router -> get('product_details','controllers/product_details.php');

// SERVICES GET REQUESTS
$router -> get ('services' , 'controllers/services/services.php');
$router -> get ('general_cleaning' , 'controllers/services/services.php');
$router -> get ('steam_cleaning' , 'controllers/services/steam_cleaning.php');
$router -> get ('hotel_personnel' , 'controllers/services/hotel_personnel.php');
$router -> get ('waiting_service' , 'controllers/services/waiting_service.php');
$router -> get ('domestic_support' , 'controllers/services/domestic_support.php');
$router -> get ('artisan_connect' , 'controllers/services/artisan_connect.php');
$router -> get ('sick_and_aged' , 'controllers/services/sick_and_aged.php');
$router -> get ('relocation_service' , 'controllers/services/relocation_service.php');
$router -> get ('disinfection_and_fumigation' , 'controllers/services/disinfection_and_fumigation.php');
$router -> get ('air_scrubbing' , 'controllers/services/air_scrubbing.php');
$router -> get ('odour_treatment' , 'controllers/services/odour_treatment.php');
$router -> get ('waste_water_treatment' , 'controllers/services/waste_water_treatment.php');




$router -> get ('personnel' , 'controllers/services/personnel_support.php');
$router -> get ('environmental' , 'controllers/services/environmental_services.php');
$router -> get ('training' , 'controllers/services/training.php');


// AUTH GET REQUESTS
$router -> get('login','controllers/auth/login.php');
$router -> get('register','controllers/auth/register.php');
$router -> get('email', 'controllers/auth/email.php');
$router -> get('reset_password', 'controllers/auth/reset_password.php');

// USER ACCOUNT GET REQUESTS
$router -> get('user_account', 'controllers/user_account/user_account.php');
$router -> get('checkout', 'controllers/user_account/checkout.php');
$router -> get('cart', 'controllers/user_account/cart.php');
$router -> get('invoice', 'controllers/user_account/invoice.php');


// POST REQUESTS

// AUTH POST REQUEST
$router -> post('contact_process', 'controllers/contact_process.php');
$router -> post('auth_user', 'controllers/auth/auth_user.php');
$router -> post('register_user', 'controllers/auth/register_user.php');
$router -> post('auth_email', 'controllers/auth/auth_email.php');


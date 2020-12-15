<?php
session_start();
?>
<?php

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;

    // Fetch all items in user's cart
    $user_cart = $app['queryBuilder']->theExecutioner(
        "
        SELECT cart.id,products.name,products.price,products.image_url,cart.quantity FROM `cart` INNER join products on cart.product_id = products.id where customer_id = {$_SESSION['id']}
        ");

    $subtotal = 0;

    foreach($user_cart as $item){
        $subtotal += ($item->quantity*$item->price);
    }

    require "views/user_account/cart.view.php";
}

// Redirect to login page if user not logged in
else{
    header("Location: login");
}
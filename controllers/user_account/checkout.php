<?php
session_start();
?>
<?php

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;
    $user_cart = $app['queryBuilder']->theExecutioner(
        "
        SELECT cart.id,products.name,products.price,products.image_url,cart.quantity FROM `cart` INNER join products on cart.product_id = products.id where customer_id = {$_SESSION['id']}
        ");

    // Continue if user's cart is not empty
    if(count($user_cart) != 0){
        // Fetch user info
        $user_info = $app['queryBuilder']->fetchUser('id',$_SESSION['id'])[0];
        
        // Fetch selected user address
        $user_address  = $app['queryBuilder']->theExecutioner(
            "
            select * from customer_address where customer_id = {$_SESSION['id']} and selected_address = 1
            ");

        // If none of the address is selected fetch first address
        if(count($user_address)==0){
            $user_address  = $app['queryBuilder']->theExecutioner(
                "
                select * from customer_address where customer_id = {$_SESSION['id']}
                ");
        }
        
        $user_address = $user_address[0];

        // Calculate subtotal 
        $subtotal = 0;

        foreach($user_cart as $item){
            $subtotal += ($item->quantity*$item->price);
        }

        // Fetch selected user payment methods
        $user_payment_methods = $app['queryBuilder']->theExecutioner(
            "SELECT customer_payment_methods.id,customer_id,payment_id,phone_number,selected_payment,name,image_url FROM `customer_payment_methods` INNER JOIN payment_methods on customer_payment_methods.payment_id = payment_methods.id WHERE customer_id={$_SESSION['id']} and selected_payment = 1
            ");

        // If none of the address is selected fetch first address
        if(count($user_payment_methods)==0){
            $user_payment_methods = $app['queryBuilder']->theExecutioner(
                "SELECT customer_payment_methods.id,customer_id,payment_id,phone_number,selected_payment,name,image_url FROM `customer_payment_methods` INNER JOIN payment_methods on customer_payment_methods.payment_id = payment_methods.id WHERE customer_id={$_SESSION['id']}
                ");
        }  
        
        $user_payment_methods = $user_payment_methods[0];
        // die(var_dump($user_payment_methods));    


        require "views/user_account/checkout.view.php";
    }

    // Else  Redirect to shop
    else{
        
        header("Location: shop");
    }

    

    
}

// Redirect to login page if user not logged in
else{
    header("Location: login");
}
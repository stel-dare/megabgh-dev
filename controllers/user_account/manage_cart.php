<?php
session_start();
?>
<?php

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){

    //Check if user already added product
    $cart = $app['queryBuilder']->theExecutioner(
        "
        select * from cart where customer_id = {$_SESSION['id']} AND product_id = {$_POST['product_id']}
        ");
    
    // if product already added by user update quantity
    if(count($cart) != 0){
        $app['queryBuilder']->theInsertExecutioner("
        UPDATE cart SET quantity = {$_POST['quantity']} where customer_id = {$_SESSION['id']} AND product_id = {$_POST['product_id']}
        ");
    }
    // Else new entry
    else{
        $app['queryBuilder']->theInsertExecutioner("
        insert into cart (customer_id, product_id, quantity) values ({$_SESSION['id']}, {$_POST['product_id']}, {$_POST['quantity']})
        ");
    }

    // Set session for number of items in cart
    $numberItemsCart = $app['queryBuilder']->theExecutioner(
        "
        select * from cart where customer_id = {$_SESSION['id']}
        ");
        
    $_SESSION['numberItemsCart'] = count($numberItemsCart);
    echo count($numberItemsCart);
}

// Redirect to login page if user not logged in
else{
    echo 'false';
}
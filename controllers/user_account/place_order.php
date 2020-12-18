<?php
session_start();
?>
<?php
//Set timezone
date_default_timezone_set('Africa/Accra');
// Check if user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // * Fetching product id instead of cart id
    $user_cart = $app['queryBuilder']->theExecutioner(
        "
        SELECT products.id,products.price,cart.quantity FROM `cart` INNER join products on cart.product_id = products.id where customer_id = {$_SESSION['id']}
        ");

    // Continue if user's cart is not empty
    if (count($user_cart) != 0) {
        $subtotal = 0;

        // Calculate subtotal
        foreach ($user_cart as $item) {
            $subtotal += ($item->quantity * $item->price);
        }

        //Date ordered
        $date_ordered = date('Y-m-d H:i:s');
        

        // Store (customer id, total paid, date ordered,order status,order_address) in orders
        $app['queryBuilder']->theInsertExecutioner("
        insert into orders (customer_id, total_paid, date_ordered, order_state_id,order_address) values ({$_SESSION['id']},$subtotal,'{$date_ordered}',2,{$_POST['adress_id']})
        ");

        // Fetch id of just inserted order
        $order_id = $app['queryBuilder']->theExecutioner("SELECT LAST_INSERT_ID() as order_id")[0]->order_id;

        // Store each (order id, product id, quantity) of all items purchased  in order products (use cart)
        foreach ($user_cart as $item) {
            $app['queryBuilder']->theInsertExecutioner("
            insert into order_products (order_id, product_id, quantity) values ($order_id, {$item->id}, {$item->quantity})
            ");
        }

        // Empty users cart
        $app['queryBuilder']->theInsertExecutioner("
           delete from cart where customer_id = {$_SESSION['id']}
               ");

        // Update cart session variable
        $_SESSION['numberItemsCart'] = 0;       
        // Redirect user to invoice
        header("Location: invoice?user={$_SESSION['id']}&order=$order_id");
    }

    // Redirect user to shop
    else {
        header("Location: shop");
    }
}

// Redirect to login page if user not logged in
else {
    header("Location: login");
}

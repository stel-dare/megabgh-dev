<?php
session_start();
?>
<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;

    $user = $app['queryBuilder']->fetchUser('id',$_SESSION['id'])[0];

    $user_payment_methods = $app['queryBuilder']->theExecutioner(
    "SELECT customer_id,payment_id,phone_number,name,image_url FROM `customer_payment_methods` INNER JOIN payment_methods on customer_payment_methods.payment_id = payment_methods.id WHERE customer_id=$user->id
    ");

    $user_address = $app['queryBuilder']->theExecutioner("
    SELECT * FROM `customer_address` WHERE customer_id = $user->id;
    ");

    $user_selected_address = $user_address[0];

    $user_past_orders =  $app['queryBuilder']->theExecutioner(
        "SELECT orders.id,orders.customer_id,orders.total_paid,orders.date_ordered,order_state.state 
        from orders left join order_state on orders.order_state_id = order_state.id where order_state.state =
         'Delivered' and orders.customer_id=$user->id
        ");
    
      
    foreach($user_past_orders as $order){
       $order->products = $app['queryBuilder']->theExecutioner("
       SELECT order_products.order_id,order_products.product_id,order_products.quantity,products.name 
       FROM `order_products` left join products on order_products.product_id = products.id HAVING 
       order_id = $order->id"); 
    }
    // die(var_dump($user_past_orders));
    require "views/user_account/user_account.view.php";
    
}

else{
    header("Location: login");
}
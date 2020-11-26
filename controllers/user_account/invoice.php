<?php
session_start();
?>
<?php
// Start session

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){

// Check if currrent user is same user being queried(Check if user is authorized to see order details)
if($_SESSION['id']===$_GET['user']){
// Fetch user
$user = $app['queryBuilder']->fetchUser('id',$_SESSION['id'])[0];

// Fetch user selected address
$user_selected_address = $app['queryBuilder']->theExecutioner("
SELECT * FROM `customer_address` WHERE customer_id = $user->id;
")[0];

// Fetch user's order
$order_id = $_GET['order'];
$order =  $app['queryBuilder']->theExecutioner(
    "SELECT orders.id,orders.customer_id,orders.total_paid,orders.date_ordered,order_state.state 
    from orders left join order_state on orders.order_state_id = order_state.id where orders.id = $order_id
      and orders.customer_id=$user->id
    ")[0];

// Add product details to order
    $order->products = $app['queryBuilder']->theExecutioner("
    SELECT order_products.order_id,order_products.product_id,order_products.quantity,products.name,products.price 
    FROM `order_products` left join products on order_products.product_id = products.id HAVING 
    order_id = $order->id"); 
 

// die(var_dump($order));

require "views/user_account/invoice.view.php";
}

// Redirect to unauthorized page
else{
    header("Location: login");  
}

}


// Redirect to login page if user not logged in
else{
    header("Location: login");
}



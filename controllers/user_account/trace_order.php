<?php
session_start();
?>
<?php
// Start session

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){

// Check if currrent user is same user being queried(Check if user is authorized to see order details)
if($_SESSION['id']===$_GET['user']){

// Fetch user's order
$order_id = $_GET['order'];
$user_id = $_GET['user'];
$order =  $app['queryBuilder']->theExecutioner(
    "SELECT orders.id,orders.customer_id,orders.total_paid,orders.date_ordered,order_state.state 
    from orders left join order_state on orders.order_state_id = order_state.id where orders.id = $order_id
      and orders.customer_id=$user_id
    ")[0];
    
// die(var_dump($order));

require "views/user_account/trace_order.view.php";
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



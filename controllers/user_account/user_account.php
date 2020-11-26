<?php
session_start();
?>
<?php
// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;
    // Fetch user
    $user = $app['queryBuilder']->fetchUser('id',$_SESSION['id'])[0];

    // Fetch user payment methods
    $user_payment_methods = $app['queryBuilder']->theExecutioner(
    "SELECT customer_id,payment_id,phone_number,name,image_url FROM `customer_payment_methods` INNER JOIN payment_methods on customer_payment_methods.payment_id = payment_methods.id WHERE customer_id=$user->id
    ");

    // Fetch user address
    $user_address = $app['queryBuilder']->theExecutioner("
    SELECT * FROM `customer_address` WHERE customer_id = $user->id;
    ");

    // User's selected sddress
    $user_selected_address = $user_address[0];

    // Fetch user's past orders
    $user_past_orders =  $app['queryBuilder']->theExecutioner(
        "SELECT orders.id,orders.customer_id,orders.total_paid,orders.date_ordered,order_state.state 
        from orders left join order_state on orders.order_state_id = order_state.id where order_state.state =
         'Delivered' and orders.customer_id=$user->id
        ");
    
    // Fetch user's current orders
    $user_current_orders =  $app['queryBuilder']->theExecutioner(
        "SELECT orders.id,orders.customer_id,orders.total_paid,orders.date_ordered,order_state.state 
        from orders left join order_state on orders.order_state_id = order_state.id where order_state.state !=
         'Delivered' and orders.customer_id=$user->id
        ");

    // Function to fetch products of orders
      function getOrderProducts($orders,$app){
        foreach($orders as $order){   
            $order->products = $app['queryBuilder']->theExecutioner("
            SELECT order_products.order_id,order_products.product_id,order_products.quantity,products.name 
            FROM `order_products` left join products on order_products.product_id = products.id HAVING 
            order_id = $order->id"); 
         }
      }

      // Function to format date
      function formatDate($orders){
        foreach($orders as $order){   
        $order->date_ordered = date_format(date_create($order->date_ordered),"l, d F Y");
        }
      }

      // Fetch past orders products
      getOrderProducts($user_past_orders,$app);

      // Format past order ddate
      formatDate($user_past_orders);

      // Fetch current order products
      getOrderProducts($user_current_orders,$app);

      //Format past order date
      formatDate($user_current_orders);
    //   die(var_dump($user_current_orders));
    
    require "views/user_account/user_account.view.php";
    
}
// Redirect to login page if user not logged in
else{
    header("Location: login");
}
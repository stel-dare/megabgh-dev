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
    // die(var_dump($user_address));
    require "views/user_account/user_account.view.php";
    
}

else{
    header("Location: login");
}
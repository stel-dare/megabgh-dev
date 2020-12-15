<?php
session_start();
?>
<?php

// Check if user is logged in
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;

    

    require "views/user_account/checkout.view.php";
}

// Redirect to login page if user not logged in
else{
    header("Location: login");
}
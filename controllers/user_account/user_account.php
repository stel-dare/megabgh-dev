<?php
session_start();
?>
<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    $logged_in = true;
    $user = $app['queryBuilder']->fetchUser('id',$_SESSION['id'])[0];
    require "views/user_account/user_account.view.php";
    
}

else{
    header("Location: login");
}
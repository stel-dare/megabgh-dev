<?php
session_start();
?>
<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    header("Location: shop");
}

$email_or_password_wrong = isset($_GET['wrong'])? $_GET['wrong'] : '';

require "views/auth/login.view.php";
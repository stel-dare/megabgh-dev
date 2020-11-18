<?php
session_start();
?>
<?php
// if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
//     header("Location: shop");
// }
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true ? true : false;

require "views/user_account/user_account.view.php";
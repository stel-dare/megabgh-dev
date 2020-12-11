<?php
session_start();
?>
<?php

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true){
    header("Location: shop");
}

$email_or_password_wrong = isset($_GET['wrong'])? $_GET['wrong'] : '';

// Get path user was refered from
$refer_user = isset($_SERVER['HTTP_REFERER'])? ltrim(parse_url($_SERVER['HTTP_REFERER'],PHP_URL_PATH).'?'.parse_url($_SERVER['HTTP_REFERER'],PHP_URL_QUERY),'/') : '';

require "views/auth/login.view.php";
<?php
session_start();
?>

<?php
// Unset all session varibles
$_SESSION = array();

// Destroy session
session_destroy();

header("location: shop");
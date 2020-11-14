<?php
$username_or_email_taken = isset($_GET['taken'])? $_GET['taken'] : '';
require "views/auth/register.view.php";
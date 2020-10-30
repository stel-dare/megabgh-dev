<?php

if($app['queryBuilder']->checkUsernameEmailTaken('email',$_POST['email']) === 0){
        echo " Email doesn't exist!";
}

else{
    $token =  bin2hex(random_bytes(64));
    $app['queryBuilder']->setTokenForPasswordReset($_POST['email'],$token);

    // Send email
    // $to = $_POST['email'];
    // $subject = "Reset your password on examplesite.com";
    // $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    // $msg = wordwrap($msg,70);
    // $headers = "From: info@examplesite.com";
    // mail($to, $subject, $msg, $headers);
    // header('location: pending.php?email=' . $email);
    header('location: reset_password');
}
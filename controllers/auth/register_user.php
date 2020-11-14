<?php

if($app['queryBuilder']->checkUsernameEmailTaken('username',$_POST['username']) != 0){
    // echo "Username Taken!";
    header("Location: register?taken=username");
    
}

elseif($app['queryBuilder']->checkUsernameEmailTaken('email',$_POST['email']) != 0){
    // echo "Email Taken!";
    header("Location: register?taken=email");
}

else{
    $hashed_password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $app['queryBuilder']->addUser($_POST['email'],$_POST['username'],$_POST['fName'],$_POST['lName'],$hashed_password);
    // echo "User added!";
    header("Location: shop");
}

<?php

if($app['queryBuilder']->checkUsernameEmailTaken('username',$_POST['username']) != 0){
    echo "Username Taken!";
}

elseif($app['queryBuilder']->checkUsernameEmailTaken('email',$_POST['email']) != 0){
    echo "Email Taken!";
}

else{
    $app['queryBuilder']->addUser($_POST['email'],$_POST['username'],$_POST['fName'],$_POST['lName'],$_POST['password']);
    echo "User added!";
}

<?php

// $isUser = $app['queryBuilder']->authUser($_POST['email'],$_POST['password']);

// echo $isUser === 1? 'Logged In' : 'User not found'; 


if($app['queryBuilder']->checkUsernameEmailTaken('email',$_POST['email']) != 1){
    // echo "Wrong Email!";
    header("Location: login?wrong=email");
}

else{
    $user = $app['queryBuilder']->fetchUser('email',$_POST['email'])[0];
    if(!password_verify($_POST['password'],$user->password)){
        // echo "Wrong Psssword!";
        header("Location: login?wrong=password");
    }

    else{
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        header("Location: shop");
    }
}




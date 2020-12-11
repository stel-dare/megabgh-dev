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
        // Fetch  number of items in customer's cart
        $numberItemsCart = $app['queryBuilder']->theExecutioner(
        "
        select * from cart where customer_id = $user->id
        ");

        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['numberItemsCart'] = count($numberItemsCart);

        // Refer user to previous page or shop
        $_POST['refer'] !=''? header("Location: {$_POST['refer']}") : header("Location: shop");
    }
}
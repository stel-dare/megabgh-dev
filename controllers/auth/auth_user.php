<?php

$isUser = $app['queryBuilder']->authUser($_POST['email'],$_POST['password']);

echo $isUser === 1? 'Logged In' : 'User not found'; 
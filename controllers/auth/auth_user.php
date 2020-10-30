<?php

$isUser = $app['queryBuilder']->authUser($_POST['email'],$_POST['password']);

echo($isUser);
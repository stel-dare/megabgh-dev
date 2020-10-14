<?php

$categories = $app['queryBuilder']->selectSome('categories',6);



require "views/shop.view.php";
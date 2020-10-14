<?php

$categories = $app['queryBuilder']->selectSome('categories',6,0);



require "views/shop.view.php";
<?php

$categories = $app['queryBuilder']->selectAll('categories');



require "views/shop.view.php";
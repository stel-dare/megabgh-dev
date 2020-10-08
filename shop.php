<?php

$queryBuilder = require 'bootstrap.php';

$categories = $queryBuilder->selectAll('categories');



require "./views/shop.view.php";
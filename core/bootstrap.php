<?php
$app = [];
require "core/Router.php";
require "core/Request.php";
require "core/database/Connection.php";
require 'core/database/QueryBuilder.php';
$app['config'] = require 'config.php';

$app['queryBuilder'] =  new QueryBuilder(Connection::make($app['config']['database']));
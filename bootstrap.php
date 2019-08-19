<?php

require 'function.php';
$config = require 'config.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';


$conn = Connection::make($config['database']);

$query = new QuerryBuilder($conn);
//return  new QuerryBuilder($conn);

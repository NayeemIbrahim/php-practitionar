<?php

require 'function.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';


$conn = Connection::make();

$query = new QuerryBuilder($conn);
//return  new QuerryBuilder($conn);

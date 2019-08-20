<?php


$config = require 'config.php';

require 'core/database/connection.php';

require 'core/Router.php';

require 'core/database/QueryBuilder.php';


$conn = Connection::make($config['database']);

$query = new QuerryBuilder($conn);

//return  new QuerryBuilder($conn);

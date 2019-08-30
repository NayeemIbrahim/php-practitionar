<?php

require 'vendor/autoload.php';

//$database = require 'core/bootstrap.php';


require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';



//$uri = new Request;


//require $router->direct($uri);

require Router::load('routes.php')->direct(Request::uri(), Request:: method());







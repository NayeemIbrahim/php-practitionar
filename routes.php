<?php

$router->get('' , 'PagesController@home');
$router->get('about' , 'PagesController@about');
$router->get('aboutCulture' , 'PagesController@aboutCulture');
$router->get('contact' , 'PagesController@contact');
$router->get('users' , 'UsersController@index');
$router->post('users' , 'UsersController@store');
//$router->post('names' , 'controllers/add-name.php');

//var_dump($router->routes);
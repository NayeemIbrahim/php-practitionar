<?php


$users = App::get('database')->selectAll('users');


//$task = $query->selectAll('todos');
//var_dump($task);


require "views/index.view.php";

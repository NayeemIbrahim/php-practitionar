<?php

App::bind('config', require 'config.php');

//die(var_dump(App::get('config')));


App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database'])

));


function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

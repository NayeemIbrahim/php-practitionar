<?php


$person = [
    'name'=>        'Nayeem',
    'age'=>            25 ,
    'accoupation'=> 'Developer'
];

$person['hobby'] = 'Reading';



die(var_dump($person));



require "index.view.php";
<?php



function dd($dumpdata)
{
    echo "<pre>";

    die(var_dump($dumpdata));

    echo "</pre>";
}

function checkAge($age)
{

    if ($age > 18)
        echo "You are aloowed";
    else
        echo "Sorry! You are not allowed";

};

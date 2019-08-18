<?php

function connectToDB(){

    try {
        $conn = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
       // echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


function fetchAllTask($conn){

    $statement = $conn->prepare('select * from todos');
    
    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
    }

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

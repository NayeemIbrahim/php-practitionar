<?php

class Connection {

    public static function make()
    {

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
}





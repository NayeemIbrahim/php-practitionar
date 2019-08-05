<?php

// require 'function.php';


class Task
{

    public $description;

    public $completed = false;

    public function __construct($description)
    {
       
        $this->description = $description;
    
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {

        return $this->completed;
    }
}

$task = [
    new Task('Go to the store'),
    new Task('Complete my task'),
    new Task('Clean the view file'),

];
$task[0]->complete();


require "index.view.php";

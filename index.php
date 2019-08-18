<?php

require 'function.php';

require 'Task.php';

$conn = connectToDB();

$task = fetchAllTask($conn);


require "index.view.php";

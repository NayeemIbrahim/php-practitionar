<?php

return [

    'database' => [

        'name' => 'mytodo',
        'password' => '',
        'username' => 'root',
        'connection' => 'mysql:host=localhost',
        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];

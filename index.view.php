<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            padding: 2cm;
            background-color: gray;
            color: white;

        }
    </style>
</head>

<body>
    <header>
        <h1>Here is Task of Homework </h1>

        <ul>
            <li><strong>Name: </strong> <?= $task['name'] ?></li>
        </ul>

        <ul>
            <li><strong>Task: </strong> <?= $task['title'] ?></li>
        </ul>

        <ul>
            <li><strong>Due Date: </strong> <?= $task['due'] ?></li>
        </ul>

        <ul>
            <li><strong>Status: </strong>
                <?php

                if ($task['completed'])

                    echo 'Finished';

                else {
                    echo 'Incomplete';
                }
                ?>
            </li>
        </ul>

        <ul>
            <li><strong>Status: </strong>

                <?php if ($task['completed']) :  ?>

                    <span>Finished</span>

                <?php else : ?>

                    <span>incompleted</span>

                <?php endif; ?>

            </li>
        </ul>

    </header>

</body>

</html>
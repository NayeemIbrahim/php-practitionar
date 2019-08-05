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
        <ul>

            <?php foreach ($task as $task) : ?>
                <li>

                    <?php if ($task->completed) : ?>

                        <strike><?= $task->description; ?></strike>

                    <?php else : ?>

                        <?= $task->description; ?>

                    <?php endif; ?>
                    
                </li>

            <?php endforeach; ?>

        </ul>

    </header>

</body>

</html>
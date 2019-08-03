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
            text-align: center;
            background-color: gray;
            color: white;

        }
    </style>
</head>

<body>
    <header>
        <h1>
            <?php
            foreach ($name as $arrayShow) {
                echo "<li> $arrayShow</li>";
            }
            ?>
        </h1>

    </header>

    
    <?php foreach ($name as $foo) : ?>

        <li><?= $foo ?></li>

    <?php endforeach; ?>

</body>

</html>
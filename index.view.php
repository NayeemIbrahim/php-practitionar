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


        <?php foreach ($task as $key => $value) : ?>

            <ul>
                <li><strong><?= ucwords($key). ':' ;?></strong> <?= $value ?></li>
            </ul>

        <?php endforeach; ?>


    </header>




</body>

</html>
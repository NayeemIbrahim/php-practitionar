<?php require 'partials/head.php'; ?>

<body>
    <?php require 'partials/nav.php'; ?>
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
<?php require 'partials/footer.php'; ?>
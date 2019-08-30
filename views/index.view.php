<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Input your Name</h1>


<form action="/names" method="POST">

    <input type="text" name="name" placeholder="Name">

    <button type="submit">Submit</button>

</form>


<?php require 'partials/footer.php'; ?>
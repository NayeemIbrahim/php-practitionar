<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>


<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Input your Name</h1>


<form action="/users" method="POST">

    <input type="text" name="name" placeholder="Name">

    <button type="submit">Submit</button>

</form>


<?php require 'partials/footer.php'; ?>
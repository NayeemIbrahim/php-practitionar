<?php require 'partials/head.php';?>
<?php require 'partials/nav.php';?>


<h1>Input your Name</h1>
<form action="/names" method="POST">

<input type="text" name="name" placeholder="Nmae">

<button type="submit">Submit</button>

</form>


<?php require 'partials/footer.php';?>

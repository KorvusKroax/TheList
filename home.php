<?php
    if (!isset($_SESSION['user'])) {
        header('location: login');
        exit();
    }
?>



<?php require('header.php'); ?>

<main>
    <h2>Hello, <?= $_SESSION['user']['name'] ?>!</h2>
</main>

<?php require('footer.php'); ?>

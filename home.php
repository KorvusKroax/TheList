<?php
    if (!isset($_SESSION['user'])) {
        header('location: login');
        exit();
    }
?>



<?php require('header.php'); ?>

<main>
    <div class="container">
        <h2>Hello, <?= $_SESSION['user']['name'] ?>!</h2>
    </div>
</main>

<?php require('footer.php'); ?>

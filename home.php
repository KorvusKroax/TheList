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
        <ul>
            <li><a href="#">teszt lista</a></li>
            <li><a href="#">másik lista</a></li>
            <li><a href="#">próba lista</a></li>
            <li><a href="#">ez is lista</a></li>
        </ul>
    </div>
</main>

<?php require('footer.php'); ?>

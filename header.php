<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Korvus">
        <title>LoginPage</title>
    </head>
    <body>
        <header>
            <h1>HEADER</h1>
            <?php if (isset($_SESSION['user'])) : ?>
                logged in as <a href="#"><?= $_SESSION['user']['name'] ?></a>
                <button class="light" onClick="location.href='logout'">logout</button>
            <?php endif; ?>
        </header>

        <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
        ?>

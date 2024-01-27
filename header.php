<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Korvus">

        <link rel="icon" href="img/favicon.png">

        <link rel="stylesheet" href="css/main.css">

        <title>LoginPage</title>
    </head>
    <body>
        <header>
            <div class="container wide inline-full">
                <h1>HEADER</h1>
                <?php if (isset($_SESSION['user'])) : ?>
                    <button onClick="location.href='logout'">logout</button>
                <?php endif; ?>
            </div>
        </header>

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <div class="container">
                    <?= $_SESSION['error']; ?>
                </div>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

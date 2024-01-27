<?php
    if (isset($_SESSION['user'])) {
        header('location: home');
        exit();
    }

    if (isset($_POST['name'])) $name = trim($_POST['name']);
    if (isset($_POST['password'])) $password = $_POST['password'];

    if (isset($_POST['login'])) {
        if (($_SESSION['error'] = validateLogin($name, $password)) == null) {
            $_SESSION['user'] = getUserByName($name);
            header('location: home');
            exit();
        }
    }
?>



<?php require('header.php'); ?>

<main>
    <form class="container tiny" method="post">
        <div class="field">
            <label for="name">username:</label><br>
            <input id="name" class="input-text" type="text" name="name" value="<?= isset($name) ? $name : "" ?>">
        </div>
        <div class="field">
            <label for="password">password:</label><br>
            <input id="password" class="input-text" type="password" name="password" value="<?= isset($password) ? $password : "" ?>">
        </div>
        <br>
        <div class="inline-full">
            <button type="submit" name="login">login</button>
            <div class="right-list">
                <a href="signup">signup</a>
                <a href="#">forgot password?</a>
            </div>
        </div>
    </form>
</main>

<?php require('footer.php'); ?>

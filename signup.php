<?php
    if (isset($_SESSION['user'])) {
        header('location: home');
        exit();
    }

    if (isset($_POST['name'])) $name = trim($_POST['name']);
    if (isset($_POST['email'])) $email = trim($_POST['email']);
    if (isset($_POST['password'])) $password = $_POST['password'];
    if (isset($_POST['confirmPassword'])) $confirmPassword = $_POST['confirmPassword'];

    if (isset($_POST['signup'])) {
        if (($_SESSION['error'] = validateName($name)) == null) {
            if (($_SESSION['error'] = validatePassword($password, $confirmPassword)) == null) {
                addUser($name, $email, $password);
                header('location: home');
                exit();
            }
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
            <label for="email">email:</label><br>
            <input id="email" class="input-text" type="email" name="email" value="<?= isset($email) ? $email : "" ?>">
        </div>
        <div class="field">
            <label for="password">password:</label><br>
            <input id="password" class="input-text" type="password" name="password" value="<?= isset($password) ? $password : "" ?>">
        </div>
        <div class="field">
            <label for="confirmPassword">confirm password:</label><br>
            <input id="confirmPassword" class="input-text" type="password" name="confirmPassword" value="<?= isset($confirmPassword) ? $confirmPassword : "" ?>">
        </div>
        <br>
        <div class="inline-full">
            <button type="submit" name="signup">signup</button>
            <a href="login">login</a>
        </div>
    </form>
</main>

<?php require('footer.php'); ?>

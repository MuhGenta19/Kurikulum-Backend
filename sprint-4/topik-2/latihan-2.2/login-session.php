<?php

session_start();
if (isset($_SESSION['user'])) {
    header("location:halaman-session.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Session</title>
</head>
<body>
    <h2>Form Login Dengan SESSION</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="user" placeholder="Username"><br>
        <label for="password">Password</label>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
    <?php
    if (isset($_POST['login'])) {
    $_SESSION['user'] = $_POST['user'];
    header("location:halaman-session.php");
    }
    ?>
</body>
</html>
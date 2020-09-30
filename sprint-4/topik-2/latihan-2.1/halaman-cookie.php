<?php

if (!isset($_COOKIE['user'])) {
    header('location:login-cookie.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Berhasi Login</p>
    <form action="" method="get">
    <button type="submit" name="logout">Log Out</button>
    </form>
</body>
</html>

<?php
if (isset($_GET['logout'])) {
    unset($_COOKIE['user']);
    setcookie('user', null, -1, '/');
    header("location:login-cookie.php?pesan=logout");
}
?>
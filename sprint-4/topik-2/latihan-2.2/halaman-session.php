<?php

session_start();
if (!isset($_SESSION['user'])) {
    header('location:login-session.php');
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
    session_unset();
    session_destroy();
    header('location:login-session.php?pesan=logout');
}
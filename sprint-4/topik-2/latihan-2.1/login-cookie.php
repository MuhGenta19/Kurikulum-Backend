<?php
if (isset($_POST['login'])) {
    setcookie('user',$_POST['user'],time()+3600, '/');
    header("location:halaman-cookie.php");
}

if (isset($_COOKIE['user'])) {
    header("location:halaman-cookie.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cookie</title>
</head>
<body>
    <h2>Form Login</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="user" placeholder="Username"><br>
        <label for="password">Password</label>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
    <
</body>
</html>
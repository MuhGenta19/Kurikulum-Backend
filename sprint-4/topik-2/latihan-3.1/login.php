<?php
include('library.php');
$lib = new Library();

session_start();
if (isset($_SESSION['username'])) {
    header('Location:home.php');
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Log In</h3>
                    
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                    </div>
                </div>
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan']=="gagal") {
                        echo "<div class='alert'>Username atau Password salah !</div>";
                    } else if ($_GET['pesan'] == "logout") {
                    echo "<div class='alert'>Berhasil Logout !</div>";
                    }   
                }    
                ?>
                <div class="form-group row">
                    <label for="pass" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Log In">
                    </div>
                </div>
                
                </div>
            </form>
            <p>Don't Have an Account ? <a href="register.php">Register</a></p>
                <?php
                if (isset($_POST['submit'])) {
                    $lib->login($_POST['username'], $_POST['pass']);
                    
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
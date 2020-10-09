<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('POST','https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => [
            'email' => 'muhammadgentaalam@gmail.com',
            'password' => 'muhammadgenta'
    ]
]);

echo $response->getStatusCode(); //200
echo $response->getHeaderLine('content-type');  // 'application / json; charset = utf8 '
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'


$response = $client->request('POST','https://api.pondokprogrammer.com/api/class/qr?class_id=85', [
    ''
]);


session_start();
if (isset($_SESSION['em'])) {

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
                <h3>Log In Pondok IT</h3>
                    
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan']=="gagal") {
                        echo "<div class='alert'>Email atau Password salah!</div>";
                    }
                }    
                ?>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="Log In">
                    </div>
                </div>
                
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
    
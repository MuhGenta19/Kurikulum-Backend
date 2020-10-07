<?php

function lingkaran($class)
{
    $file = "App/Lingkaran/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function segitiga($class)
{
    $file = "App/Segitiga/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function persegi($class)
{
    $file = "App/Persegi/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("lingkaran");
spl_autoload_register("segitiga");
spl_autoload_register("persegi");

if (isset($_POST['hitungPersegi'])) {
    $lebar = $_POST['lebar'];
    $panjang = $_POST['panjang'];
    new Persegi($lebar, $panjang);
} elseif (isset($_POST['hitungSegitiga'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $s = new Segitiga($alas, $tinggi);
} elseif (isset($_POST['hitungLingkaran'])) {
    $jari2 = $_POST['jari2'];
    $l = new Lingkaran($jari2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Hitung Persegi</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="panjang" class="col-sm-2 col-form-label">Sisi 1</label>
                        <div class="col-sm-10">
                            <input type="text" name="panjang" class="form-control" id="panjang"
                                placeholder="Input Dalam Ukuran cm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lebar" class="col-sm-2 col-form-label">Sisi 2</label>
                        <div class="col-sm-10">
                            <input type="text" name="lebar" class="form-control" id="lebar"
                                placeholder="Input Dalam Ukuran cm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lebar" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="hitungPersegi" class="btn btn-primary" value="Hitung">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card-header">
                <h3>Hitug Segitiga</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="alas" class="col-sm-2 col-form-label">Alas</label>
                        <div class="col-sm-10">
                            <input type="text" name="alas" class="form-control" id="alas" placeholder="Input Dalam Ukuran cm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-sm-2 col-form-label">Tinggi</label>
                        <div class="col-sm-10">
                            <input type="text" name="tinggi" class="form-control" id="tinggi"
                                placeholder="Input Dalam Ukuran cm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="hitungSegitiga" class="btn btn-primary" value="Hitung">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card-header">
                <h3>Hitug Lingkaran</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="jari2" class="col-sm-2 col-form-label">Jari-jari</label>
                        <div class="col-sm-10">
                            <input type="text" name="jari2" class="form-control" id="jari2" placeholder="Input Dalam Ukuran cm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jari2" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="hitungLingkaran" class="btn btn-primary" value="Hitung">
                        </div>
                    </div>
                </form>
            </div>
        </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous"></script>
</body>

</html>
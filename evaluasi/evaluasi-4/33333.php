<?php 
include('11111.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $nama_santri = $_POST['nama_santri'];
    $divisi = $_POST['divisi'];
    $asal = $_POST['asal'];
 
    $add_status = $lib->addData($nama_santri, $divisi, $asal);
    if($add_status){
    header('Location: 22222.php');
    }
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
                <h3>Tambah Data Santri</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="nama_santri" class="col-sm-2 col-form-label">Nama Santri</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_santri" class="form-control" id="nama_santri">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
                    <div class="col-sm-10">
                    <input type="text" name="divisi" class="form-control" id="divisi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">asal</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="asal" id="asal"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
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
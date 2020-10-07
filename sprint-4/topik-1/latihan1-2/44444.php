<?php 
include('11111.php');
$lib = new Library();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $data_barang = $lib->getData($id);
}
else
{
    header('Location:22222.php');
}
 
if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok_barang = $_POST['stok_barang']; 
    $status_update = $lib->update($id,$nama_barang,$harga,$stok_barang);
    if($status_update)
    {
        header('Location:22222.php');
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
                <h3>Update Data Barang</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data_barang['id']; ?>"/>
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_barang['harga']; ?>" name="harga" class="form-control" id="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="number" name="stok_barang" id="stok_barang" value="<?php echo $data_barang['stok_barang']; ?>"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok_barang" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
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
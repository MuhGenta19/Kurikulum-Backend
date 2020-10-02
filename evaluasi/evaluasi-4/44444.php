<?php 
include('11111.php');
$lib = new Library();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $data_santri = $lib->getData($id);
}
else
{
    header('Location:22222.php');
}
 
if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $nama_santri = $_POST['nama_santri'];
    $divisi = $_POST['divisi'];
    $asal = $_POST['asal']; 
    $status_update = $lib->update($id,$nama_santri,$divisi,$asal);
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
                <h3>Update Data Santri</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data_santri['id']; ?>"/>
                <div class="form-group row">
                    <label for="nama_santri" class="col-sm-2 col-form-label">Nama Santri</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_santri" class="form-control" id="nama_santri" value="<?php echo $data_santri['nama_santri']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_santri['divisi']; ?>" name="divisi" class="form-control" id="divisi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="asal" id="asal" value="<?php echo $data_santri['asal']; ?>"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label"></label>
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
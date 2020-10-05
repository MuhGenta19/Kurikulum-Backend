<?php 
include('library.php');
$lib = new Library();
$data_barang = $lib->show();
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

if(isset($_GET['hapus_barang']))
{
    $id = $_GET['hapus_barang'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
        header('Location:home.php');
    }
}

if (isset($_GET['aksi']) == 'logout'){
    $lib->logout();
    header('Location: login.php');
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
                <h3>Data Barang</h3>
            </div>
            <div class="card-body">
                <a href="add.php" class="btn btn-success">Tambah</a>
                <a href="home.php?aksi=logout"><button class="btn btn-warning">Log Out</button></a>
                <hr/>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok Barang</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_barang as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_barang']."</td>";
                        echo "<td>".$row['harga']."</td>";
                        echo "<td>".$row['stok_barang']."</td>";
                        echo "<td><a class='btn btn-info' href='update.php?id=".$row['id']."'>Update</a>
                        <a class='btn btn-danger' href='home.php?hapus_barang=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
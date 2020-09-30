<?php

class post {
public function __construct()
{
    try {
        $this->connect = new PDO("mysql:host=localhost; dbname=post_get", "genta", "12345678");
        $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "connection failed: ".$e->getMassage();
    }
}

public function tambahPengiriman($nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang)
{
    $data =  [$nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang];
    $query = "INSERT INTO pengiriman (nama_kurir,nama_pengirim,asal_barang,tujuan_barang) VALUES ('$nama_kurir', '$nama_pengirim', '$asal_barang', '$tujuan_barang');";
    $show = $this->connect->prepare($query);
    $show->execute();

    $this->getData();
}

public function getData()
{
    $query = "SELECT * FROM pengiriman";
    $show = $this->connect->prepare($query);
    $show -> execute();
    
    $result = $show->fetchAll(pdo::FETCH_ASSOC);
    return $result;        
}
}
$post = new post();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>
<body>
    <form action="" method="post" id="form">
        <h2>Form Pengiriman Menggunakan POST</h2>
        <label for="nama_kurir">Nama Kurir</label><br>
        <input type="text" name="nama_kurir"><br>
        <label for="nama_pengirim">Nama Pengirim</label><br>
        <input type="text" name="nama_pengirim"><br>
        <label for="asal_barang">Asal Barang</label><br>
        <input type="text" name="asal_barang"><br>
        <label for="tujuan_barang">Tujuan Barang</label><br>
        <input type="text" name="tujuan_barang"><br>
        <input type="submit" name="kirim"text value="Kirim">
    </form>
    <?php
    if (isset($_POST['kirim'])) {
        $nama_kurir = $_POST['nama_kurir'];
        $nama_pengirim = $_POST['nama_pengirim'];
        $asal_barang = $_POST['asal_barang'];
        $tujuan_barang = $_POST['tujuan_barang'];
        $post->tambahPengiriman($nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang);
        header("location:latihan-post1.php");
    }
    ?>
    <table>
        <tr>
            <th>Nama Kurir</th>
            <th>Nama Pengirim</th>
            <th>Asal Barang</th>
            <th>Tujuan Barang</th>
        </tr>
        <?php
        foreach ($post->getData() as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['nama_kurir'];?></td>
                <td><?php echo $value['nama_pengirim'];?></td>
                <td><?php echo $value['asal_barang'];?></td>
                <td><?php echo $value['tujuan_barang'];?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
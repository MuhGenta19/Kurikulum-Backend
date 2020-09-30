<?php

class Get {
public function __construct()
{
    try {
        $this->connect = new PDO("mysql:host=localhost; dbname=post_get", "genta", "12345678");
        $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "connection failed: ".$e->getMessage();
    }
}

public function tambahBarang($nama_barang, $harga)
{
    $query = "INSERT INTO barang (nama_barang, harga) VALUES (?, ?)";
    $show = $this->connect->prepare($query);
    $show->execute([$nama_barang,$harga]);
}

public function getData()
{
    $query = "SELECT * FROM barang";
    $show = $this->connect->prepare($query);
    $show -> execute();

    $result = $show->fetchAll(pdo::FETCH_ASSOC);
    return $result;        
}
}
$get = new Get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <form action="" method="get" id="form">
        <h2>Form Barang Menggunakan GET</h2>
        <label for="nama_barang">Nama Barang</label><br>
        <input type="text" name="nama_barang"><br>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga"><br>
        <input type="submit" name="kirim" value="Kirim">
    </form>
    <?php
    if (isset($_GET['kirim'])) {
        $nama_barang = $_GET['nama_barang'];
        $harga = $_GET['harga'];
        $get->tambahBarang($nama_barang, $harga);
        header("location:latihan-get1.php");
    }
    ?>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
        </tr>
        <?php
        foreach ($get->getData() as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['nama_barang'];?></td>
                <td><?php echo $value['harga'];?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
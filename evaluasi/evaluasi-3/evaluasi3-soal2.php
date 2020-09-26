<?php

class ConnectPDO
{
    
    public function __construct()
    {
        try {
            $this->connect = new PDO("mysql:host=localhost; dbname=evaluasi_3", "genta", "12345678");
            $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "connection failed: ".$e->getMassage();
        }
    } 

    public function getData()
    {
        $query = "SELECT * FROM siswa";
        $show = $this->connect->prepare($query);
        $show -> execute();

        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
        echo "\n";
    }

    public function insertData()
    {
        echo "jumlah siswa yang ingin ditambah kan :";
        $jumlah = trim(fgets(STDIN));

        for ($i=1; $i <= $jumlah; $i++) { 
            echo "siswa ke $i \n";
            echo "tambahkan nama:  ";
            $nama = trim(fgets(STDIN));
            echo "tambahkan nilai : ";
            $nilai = trim(fgets(STDIN));

            $data =  [$nama,$nilai];
            $query = "INSERT INTO siswa (nama,nilai) VALUES (?, ?)";
            $show = $this->connect->prepare($query);
            $show->execute($data);
        }
        $this->getData();
    }

    public function updateData()
    {
        echo "masukkan id siswa yang ingin di update : ";
        $id = trim(fgets(STDIN));
        echo "update nilai menjadi :";
        $nilai = trim(fgets(STDIN));

        $query = "UPDATE siswa SET nilai=$nilai WHERE id=$id";
        $show = $this->connect->prepare($query);
        $show->execute();
        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
        echo "\n";

        $this->getData();


    }

    public function deleteData()
    {
        echo "masukkan id siswa yang ingin dihapus : ";
        $id = trim(fgets(STDIN));

        $query = "DELETE FROM siswa WHERE id=$id";
        $show = $this->connect->prepare($query);
        $show->execute();
        echo "\n";

        $this->getData();
    }
}
$kondisi = true;
    while ($kondisi) {
        echo "DAFTAR NILAI SISWA\n";

        echo "MENU\n";
        echo "1. tambah siswa\n";
        echo "2. update siswa\n";
        echo "3. hapus siswa\n";
        echo "Pilih Menu  : ";
        $menu = trim(fgets(STDIN));

        switch ($menu) {
            case 1:
                $class = new ConnectPDO();
                $class->insertData();
                break;

            case 2:
                $class->updateData();
                break;  

            case 3:
                $class->deleteData();
                break; 

            default:
                echo "MENU TIDAK TERSEDIA...\n";
                break;
        }
    }
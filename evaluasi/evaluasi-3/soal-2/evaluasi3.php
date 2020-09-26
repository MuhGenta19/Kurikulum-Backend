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

    public function tambahSiswa($nama, $nilai)
    {
        $data =  [$nama,$nilai];
        $query = "INSERT INTO siswa (nama,nilai) VALUES (?, ?)";
        $show = $this->connect->prepare($query);
        $show->execute($data);

        $this->getData();
    }

    public function getData()
    {
        $query = "SELECT * FROM siswa";
        $show = $this->connect->prepare($query);
        $show -> execute();

        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);        
    }

    public function jumlahSiswa()
    {
        $query = "SELECT COUNT(id) FROM siswa";
        $show = $this->connect->prepare($query);
        $show -> execute();        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function rataRata()
    {
        $query = "SELECT AVG(nilai) FROM siswa";
        $show = $this->connect->prepare($query);
        $show -> execute();        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function tertinggi()
    {
        $query = "SELECT * FROM siswa WHERE nilai > 80";
        $show = $this->connect->prepare($query);
        $show -> execute();        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function terendah()
    {
        $query = "SELECT * FROM siswa WHERE nilai <= 65";
        $show = $this->connect->prepare($query);
        $show -> execute();        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

}
function pilih() {
    $conn = new ConnectPDO();

    echo "1 = tambah || 2 = tampilkan || 3 = jumlah || 4 = rata-rata || 5 = nilai > 80 || 6 = nilai <= 65\n";
    echo "masukkan menu : ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == 1) {
        echo "jumlah siswa yang ingin ditambah kan :";
        $jumlah = trim(fgets(STDIN));

        for ($i=1; $i <= $jumlah; $i++) { 
            echo "siswa ke $i \n";
            echo "tambahkan nama:  ";
            $nama = trim(fgets(STDIN));
            echo "tambahkan nilai : ";
            $nilai = trim(fgets(STDIN));
            $conn->tambahSiswa($nama, $nilai);
        }
        
    } else if ($pilih == 2) {
        echo "Daftar Nilai Siswa\n";
        $conn->getData();
    } else if ($pilih == 3) {
        echo "Jumlah Siswa\n";
        $conn->jumlahSiswa();
    }else if ($pilih == 4) {
        echo "Rata-Rata Siswa\n";
        $conn->rataRata();
    } else if ($pilih == 5) {
        echo "Siswa Yang Nilainya > 80\n";
        $conn->tertinggi();
    }else if ($pilih == 6) {
        echo "Siswa Yang Nilainya <= 65\n";
        $conn->terendah();
    }
    echo "jalankan lagi ? (y/n) : ";
    $yesno = trim(fgets(STDIN));
    if ($yesno == 'y') {
        pilih();
    }
}
pilih();
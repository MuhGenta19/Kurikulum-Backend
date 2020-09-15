<?php

class Perpustakaan
{
    public $buku = [
        'judul', 'isbn',
    ];

    public $pengunjung = [
        'nama',
    ];

    public function buku($buku) {
        $this->buku = $buku;
    }
    public function pengunjung($pengunjung) {
        $this->pengunjung = $pengunjung;
    }

}

class Pengunjung extends Perpustakaan
{
    public $borrow;
    public $restore;
    
    public function pinjam_buku() {
        $borrow = $this->pengunjung['nama']." meminjam buku ".$this->buku['judul']." dengan isbn ".$this->buku['isbn'];
        return $borrow;
    }

    public function kembalikan_buku() {
        $restore = $this->pengunjung['nama']." mengembalikan buku ".$this->buku['judul']." dengan isbn ".$this->buku['isbn'];
        return $restore;
    }

}

$Perpustakaan2 = new Pengunjung();

$Perpustakaan2->buku(['judul'=>'Percy Jackson', 'isbn'=>'123-456-789-19-0']);
$Perpustakaan2->pengunjung(['nama'=>'Fulan']);

echo $Perpustakaan2->pinjam_buku();
echo "\n";
echo $Perpustakaan2->kembalikan_buku();
echo "\n";

?>
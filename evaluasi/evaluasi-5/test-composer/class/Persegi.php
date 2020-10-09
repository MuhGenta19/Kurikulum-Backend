<?php

namespace Hitungan;

class Persegi
{

    public function __construct($lebar, $panjang) {
        $hasil = $lebar*$panjang;
        echo "<script>alert('Persegimu Luasnya $hasil cm !');</script>";
    }

}
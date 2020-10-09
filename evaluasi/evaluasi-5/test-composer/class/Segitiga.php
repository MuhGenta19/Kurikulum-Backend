<?php

namespace Hitungan;

class Segitiga
{

    public function __construct($alas, $tinggi) {
        $hasil = 1/2*$alas*$tinggi;
        echo "<script>alert('Segitigamu Luasnya $hasil cm !');</script>";
    }
}
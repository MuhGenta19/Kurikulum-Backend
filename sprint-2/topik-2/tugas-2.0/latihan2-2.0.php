<?php

class RumusLuas
{
    public function __construct() {
        $this->calcRectangleArea(4,8);
        $this->calcCircleArea(4.5);
        $this->calcTriangleArea(4,5);
        $this->calcTrapesiumArea(4,10,5);
    }

    public function calcRectangleArea($lebar, $panjang) {
        $hasil1 = $lebar*$panjang;
        echo $hasil1;
        echo "\n";
    }
    
    public function calcCircleArea($jari2) {
        $hasil2 = 22/7*($jari2*$jari2);
        echo $hasil2;
        echo "\n";
    }
    
    public function calcTriangleArea($alas, $tinggi) {
        $hasil3 = 1/2*$alas*$tinggi;
        echo $hasil3;
        echo "\n";
    }
    
    public function calcTrapesiumArea($sisi1, $sisi2, $tinggi) {
        $hasil4 = 1/2*($sisi1+$sisi2)*$tinggi;
        echo $hasil4;
        echo "\n";
    }
}

$kelas = new RumusLuas;


<?php

class RumusLuas
{
    public static function calcRectangleArea($lebar, $panjang) {
        $hasil = $lebar*$panjang;
        echo $hasil;
        echo "\n";
    }
    
    public static function calcCircleArea($jari2) {
        $hasil = 22/7*($jari2*$jari2);
        echo $hasil;
        echo "\n";
    }
    
    public static function calcTriangleArea($alas, $tinggi) {
        $hasil = 1/2*$alas*$tinggi;
        echo $hasil;
        echo "\n";
    }
    
    public static function calcTrapesiumArea($sisi1, $sisi2, $tinggi) {
        $hasil = 1/2*($sisi1+$sisi2)*$tinggi;
        echo $hasil;
        echo "\n";
    }
}

RumusLuas::calcRectangleArea(4, 8);
RumusLuas::calcCircleArea(4.5);
RumusLuas::calcTriangleArea(5, 4);
RumusLuas::calcTrapesiumArea(4, 10, 5);
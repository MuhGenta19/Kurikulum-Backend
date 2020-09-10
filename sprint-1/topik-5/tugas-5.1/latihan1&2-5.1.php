<?php

function CalcRectangleArea($width, $length){
    $luas_persegi_panjang = $width*$length;
    echo $luas_persegi_panjang;
    echo "\n";
};

CalcRectangleArea(4, 8);

function CalcCircleArea($jari2){
    $luas_lingkaran = 22/7*$jari2*$jari2;
    echo $luas_lingkaran;
    echo "\n";
};

CalcCircleArea(4.5);

function CalcTriangleArea($alas, $tinggi){
    $luas_segitiga = 1/2*$alas*$tinggi;
    echo $luas_segitiga;
    echo "\n";
};

CalcTriangleArea(5, 4);

function CalcTrapesiumArea($sisi1, $sisi2, $tinggi){
    $luas_trapesium = 1/2*($sisi1+$sisi2)*$tinggi;
    echo $luas_trapesium;
    echo "\n";
};

CalcTrapesiumArea(4, 10, 5);

?>
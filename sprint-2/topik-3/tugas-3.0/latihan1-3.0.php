<?php

class RumusLuas
{
    public static function calcRectangleArea($lebar, $panjang) {
        if ($lebar < 0 || $panjang < 0) {
            throw new Exception('lebar atau panjang tidak boleh 0 !'."\n");
        }
        $hasil = $lebar*$panjang;
        echo $hasil;
        echo "\n";
    }
    
    public static function calcCircleArea($jari2) {
        if ($jari2 <= 0) {
            throw new Exception('jari-jari tidak boleh 0 !'."\n");
        }
        $hasil = 22/7*($jari2*$jari2);
        echo $hasil;
        echo "\n";
    }
    
    public static function calcTriangleArea($alas, $tinggi) {
        if ($alas <= 0 || $tinggi <= 0) {
            throw new Exception('alas atau tinggi tidak boleh 0 !'."\n");
        }
        $hasil = 1/2*$alas*$tinggi;
        echo $hasil;
        echo "\n";
    }
    
    public static function calcTrapesiumArea($sisi1, $sisi2, $tinggi) {
        if ($sisi1 <= 0 || $sisi2 <= 0 || $tinggi <= 0) {
            throw new Exception('sisi atau tinggi tidak boleh 0 !'."\n");
        }
        $hasil = 1/2*($sisi1+$sisi2)*$tinggi;
        echo $hasil;
        echo "\n";
    }
}

try {
    RumusLuas::calcRectangleArea(4, 0);
} catch (Exception $ex) {
    // var_dump($ex);
    echo "Error pada ".$ex->getFile()." baris ke : ". $ex->getLine()."\n";
    echo $ex->getMessage();
    echo "\n";
}

try {
    RumusLuas::calcCircleArea(0);
} catch (Exception $ex) {
    // var_dump($ex);
    echo "Error pada ".$ex->getFile()." baris ke : ". $ex->getLine()."\n";
    echo $ex->getMessage();
    echo "\n";
}

try {
    RumusLuas::calcTriangleArea(5, 0);
} catch (Exception $ex) {
    // var_dump($ex);
    echo "Error pada ".$ex->getFile()." baris ke : ". $ex->getLine()."\n";
    echo $ex->getMessage();
    echo "\n";
}

try {
    RumusLuas::calcTrapesiumArea(0, 10, 5);
} catch (Exception $ex) {
    // var_dump($ex);
    echo "Error pada ".$ex->getFile()." baris ke : ". $ex->getLine()."\n";
    echo $ex->getMessage();
    echo "\n";
}

?>
<?php

$calcRectangleArea = function($lebar, $panjang){
    return $lebar*$panjang;
};

echo $calcRectangleArea(4, 8);
echo "\n";

$caklcCircleArea = function($jari2) {
    return 22/7*($jari2*$jari2);
};
echo $caklcCircleArea(4.5);
echo "\n";

$calcTriangleArea = function($alas, $tinggi) {
    return 1/2*$alas*$tinggi;
};
echo $calcTriangleArea(4, 5);
echo "\n";

$calcTrapesiumArea = function($sisi1, $sisi2, $tinggi) {
    return 1/2*($sisi1+$sisi2)*$tinggi;
};
echo $calcTrapesiumArea(4, 10, 5);
echo "\n";
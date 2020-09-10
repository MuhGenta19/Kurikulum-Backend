<?php

$array = [2, 3, 4, 5, 6, 7, 8, 9,];


function latihan3($array) {
    foreach ($array as $value) {
        $kali_array = $value*3;
    }
    print_r($kali_array);
};

latihan3($array);

echo "\n";
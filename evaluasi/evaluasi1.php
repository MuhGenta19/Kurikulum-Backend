<?php

//1.
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9) {
            echo "&nbsp&nbsp+";
        } else {
            echo "&nbsp&nbsp-&nbsp";

        }
    }
    echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9) {
            echo "&nbsp&nbsp+";
        } else {
            echo "&nbsp&nbsp-&nbsp";

        }
    }
    echo "<br>";
}

//3.
echo "data yang ingin diinputkan : ";
$data = trim(fgets(STDIN));

for ($i = 1; $i <= $nilai; $i++) {
    echo "masukkan data : ";
    $data_ke[] = trim(fgets(STDIN));

};

for ($i = 1; $i <= $data_ke; $i++) { 
    $data1 = [
        'Nama' => 'Udin',
        'NIK' => 'TOO1',
        'Jurusan' => 'Programmer',
        'Divisi' => 'Backend',
        'Usia' => '74',
    ];
    print_r($data1);
}
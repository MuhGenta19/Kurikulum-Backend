<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

function sortById($data) {
    echo "<strong>daftar santri berdasarkan nomor induk</strong> <br><br>";
    asort($data);
    foreach ($data as $value) {
        foreach ($value as $key => $v) {
            echo $key." : ".$v.", ";
        }
        echo "<br><hr>";
    }
    echo "<br>";
}

function sortByName($data) {
    echo "<strong>daftar santri berdasarkan nama</strong> <br><br>";
    ksort($data);
    for ($i=0; $i < count($data); $i++) { 
        $name[] = $data[$i]['name'];
    }
    array_multisort($name, SORT_ASC, $data);
    foreach ($name as $key => $value) {
        echo $key." : ".$value."<br>";
    }
    echo "<br>";
}

function minat($data) {
    echo "<strong>daftar santri dengan minat PHP Backend</strong> <br><br>";
    asort($data);
    foreach ($data as $value) {
        foreach ($value as $key => $v) {
            if ($value['division'] == 'PHP Backend') {
                echo $key." : ".$v."<br>";
            }
        }
    }
    echo "<br>";
}

function umur($data) {
    echo "<strong>daftar santri dengan umur kurang dari 25</strong> <br><br>";
    asort($data);
    foreach ($data as $value) {
        foreach ($value as $key => $v) {
            if ($value['age'] < 25 ) {
                echo $key." : ".$v."<br>";
                continue;
            }
        }
    }
    echo "<br>";
}

function rataUsia($data) {
    echo "<strong>rata-rata usia santri</strong> <br><br>";
    asort($data);
    for ($i=0; $i < count($data); $i++) { 
        $age[] = $data[$i]['age'];
    }
    $count = count($age);
    $sum = array_sum($age);
    echo $sum/$count." tahun";
    echo "<br><br>";
}

function muda($data) {
    echo "<strong>santri paling muda</strong> <br><br>";
    asort($data);
    for ($i=0; $i < count($data); $i++) { 
        $age[] = $data[$i]['age'];
    }
    $min = min($age);
    echo $min." tahun";
}

sortById($students);
sortByName($students);
minat($students);
umur($students);
rataUsia($students);
muda($students);
<?php

//1.
for ($i=0; $i < 9; $i++) { 
    for ($j=0; $j < 9; $j++) { 
        if ($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9) {
            echo " + ";
        } else {
            echo " - ";
        }
    }
    echo "\n";
}

echo "\n";

for ($i=0; $i < 9; $i++) { 
    for ($j=0; $j < 9; $j++) { 
        if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9) {
            echo " + ";
        } else {
            echo " - ";
        }
    }
    echo "\n";
}

echo "\n";

// 2.
function selectionValue(string $collectionValue): int {
    foreach ($collectionValue as $key => $value) {
        $explode = explode('0', $value);
        $split = str_split($explode[$key]);
        sort($split);
        $result = array_merge($split);
    }
    $result = array_merge(...$split);
    print_r($split);
    print_r($result);
}
echo selectionValue(5956560159466056);

echo "\n";

//3.
echo "data yang diinginkan : ";
$jumlah = trim(fgets(STDIN));

echo "\n";

for ($i=0; $i < $jumlah; $i++) { 
    echo "nama : ";
    $data ['nama'] = trim(fgets(STDIN));
    echo "divisi : ";
    $data ['divisi'] = trim(fgets(STDIN));
    echo "usia : ";
    $data ['usia'] = trim(fgets(STDIN));

    $total[] = $data;
    echo "\n";
}
print_r($total);

foreach ($total as $value) {
    if ($value['divisi'] == 'backend') {
        $backend[] = $value['nama'];
    }
    if ($value['usia'] < 25) {
        $dualima[] = $value['nama'];
    }

    $semua[] = $value['usia'];
}

echo "Yang minat sebagai Backend adalah : ";
foreach ($backend as $value) {
    echo $value.", ";
}
echo "\n";

echo "Usia yang kurang dari 25 adalah : ";
foreach ($dualima as $value) {
    echo $value.", ";
}
echo "\n";

echo "Usia Paling muda adalah : ";
array_multisort($semua, SORT_ASC, $total);
$min =  min($semua);

foreach ($total as $value) {
    if ($value['usia'] == $min) {
        echo $value['nama'].", ";
    }
}
echo "\n";

?>
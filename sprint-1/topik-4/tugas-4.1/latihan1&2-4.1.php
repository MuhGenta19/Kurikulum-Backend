<?php

echo "mau input berapa nilai : ";
$nilai = (int) trim(fgets(STDIN));

for ($i = 1; $i <= $nilai; $i++) {
    echo "input ke-". $i.": ";
    $input_ke[] = (int) trim(fgets(STDIN));

};

echo "\n";

$modus = array_count_values($input_ke);
arsort ($modus);
foreach ($modus as $key => $val) {
    if ($val == max ($modus)) {
        echo "modus = [$key], dengan banyak data = $val\n";
    }
};

$count = count($input_ke);
$mean = array_sum($input_ke)/$count;
echo "mean = $mean\n";

sort($input_ke);
$round = round($count/2);
$median = $input_ke[$round-1];
echo "median = $median\n";

rsort($input_ke);
for ($i = 0; $i < 3; $i++) {
    $max[] = $input_ke[$i];
}
echo "highest : ";
print_r($max);

echo "\n";

sort($input_ke);
for ($i = 0; $i < 3; $i++) {
    $min[] = $input_ke[$i];
}
echo "lowest : ";
print_r($min);

echo "\n";

?>

<?php
echo '<p style = "color: red">Bai 14</p>';
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
$result = [];

foreach ($array2 as $key => $value) {
    $result[$key] = array_merge([$value], $array1[$key]);
}

print_r($result);
?>

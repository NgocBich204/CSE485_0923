<?php
function convertTolower($arr) {
    return array_map('strtolower', $arr);
}
echo '<p style = "color: red">Bai 10</p>';
$arrs = ['1', 'b', 'C', 'E'];
$result = convertTolower($arrs);
echo "Kết quả cho mảng 1: ";
print_r($result);
echo '<br>';
$arrs1 = ['a', 0, null, false];
$result1 = convertTolower($arrs1);
echo "Kết quả cho mảng 2: ";
print_r($result1);
?>
<?php
echo '<p style = "color: red">Bai 12</p>';
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
echo "Phan tu dau tien: " . reset($numbers) . '<br>';
echo "Phan tu cuoi cung: " . end($numbers) . '<br>';
echo "Phan tu lon nhat: " . max($numbers) . '<br>';
echo "Phan tu nho nhat: " . min($numbers) . '<br>';
echo "Tong gia tri cua mang tren: " . array_sum($numbers) . '<br>';
ksort($numbers);
echo "Sap xep theo thu tu tang dan theo key: ";
print_r($numbers);
echo '<br>'. "Sap xep theo thu tu dam dan theo key: ";
krsort($numbers);
print_r($numbers);

echo '<br>';
echo SORT_ASC;
sort($numbers, SORT_ASC);
print_r($numbers);
?>

<?php
echo '<p style = "color: red">Bai 11</p>';
$array = array(1, 2, 3, 4, 5);
$indexToRemove = 2; // Vị trí phần tử cần xóa (lưu ý vị trí bắt đầu từ 0)

array_splice($array, $indexToRemove, 1); // Xóa 1 phần tử từ vị trí $indexToRemove

$array = array_values($array); // Đảm bảo các key trong mảng là tuần tự

print_r($array);
?>

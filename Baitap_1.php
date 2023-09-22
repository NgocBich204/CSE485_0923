
<!--Viết hàm tổng – tích – hiệu - thương của các phần tử trong mảng số nguyên sau,-->
<!--sử dụng hàm trong PHP: $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
Hàm array_sum() tính tổng
 array_product()Tích
 Hieu : lây số đầu trừ đi các phần tư con lại .
 cách làm: lấy 1 biến đếm . biến đếm bằng 0 s trừ cho đến khi biên sđếm lơn hơn phần tử trong hàng
-->
<?php
$arrs =array(2, 5, 6, 9, 2, 5, 6, 12 ,5) ;
$count_1 = $arrs[0];
$count_2 = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $count_1 -= $arrs[$i];
    $count_2 /= $arrs[$i];
}
echo 'Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 =' .array_sum($arrs). "<br>";
echo' Tích các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 =' .array_product($arrs)."<br>";
echo' Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 ='  .$count_1 ."<br>";
echo' Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = ' .$count_2 ."<br>";
?>
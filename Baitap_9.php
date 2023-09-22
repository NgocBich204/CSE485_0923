<!--Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự-->
<!--thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra-->
<!--VD: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]-->
<?php
function convertToUpper($arr) {
    return array_map('strtoupper', $arr);
}
echo '<p style = "color: red">Bai 9</p>';
$arrs = ['1', 'b', 'C', 'E'];
$result = convertToUpper($arrs);
echo "Kết quả cho mảng 1: ";
print_r($result);
echo '<br>';
$arrs1 = ['a', 0, null, false];
$result1 = convertToUpper($arrs1);
echo "Kết quả cho mảng 2: ";
print_r($result1);
?>
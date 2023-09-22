
<!--Cho mảng $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];-->
<!--Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:-->
<!--“Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của Sơn, cam là màu yêu-->
<!--thích của Thắng, còn màu yêu thích của tôi là màu trắng-->
<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$className = 'color';

echo "<style>";
echo ".{$className} {";
echo "    color: red;";
echo "}";
echo "</style>";

foreach ($arrs as $color) {
    echo "<span class='{$className}'>$color</span>, ";
}

?>
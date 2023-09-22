<?php
$array = array ('programming', 'php', 'basic', 'dev', 'is', 'program is PHP');
$dodai = array_map ('strlen',$array);
echo 'Chuỗi lớn nhất là program is PHP, độ dài = '.min($dodai)."<br>";
echo 'Chuỗi lớn nhất là is, độ dài =  '.max($dodai)."<br>";
?>


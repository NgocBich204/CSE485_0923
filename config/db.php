<?php
$connect = mysqli_connect('localhost', 'root','123','btth01_cse485');
if($connect){
    mysqli_query($connect, "set names 'UTF8'");
}
else{
    echo "ket noi that bai";
}
?>
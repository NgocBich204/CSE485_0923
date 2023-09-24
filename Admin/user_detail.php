<?php
if(isset($_GET['id'])){
    $uid = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$uid'";
    echo $sql;
}

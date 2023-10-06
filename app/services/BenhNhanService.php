<?php
require_once APP_ROOT . '/app/models/BenhNhan.php';
class BenhNhanService{
    public function getAllBenhNhan()
    {
        // buoc 1: ket noi Databse
        try {
            $conn = new PDO('mysql:host=localhost;dbname=PhongMach', 'root', '123');
            // buoc 2: truy van du lieu
            $sql = "SELECT * FROM PhongMach" ;
            $stmt = $conn->query($sql);
            // buoc 3: xu ly ket qua tra ve
            $phongmach = [];
            while ($row = $stmt->fetch()) {
                $benhnhan = new BenhNhan($row['id'], $row['tenBacSi'], $row['chuyenKhoa']);
                $benhnhans[] = $benhnhan;
            }
            return $benhnhans;
        } catch (PDOException $e) {
//            $conn = null ;
            return $benhnhans = [];
        }
    }
}

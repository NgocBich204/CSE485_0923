<?php
require_once APP_ROOT.'/app/models/BacSi.php';

class BacSiService{
    public function getAllPhongMach(){
        // buoc 1: ket noi Databse
        try{
            $conn = new PDO('mysql:host=localhost;dbname=PhongMach','root','123');
            // buoc 2: truy van du lieu
            $sql = "SELECT * FROM BacSi";
            $stmt = $conn->query($sql);
            // buoc 3: xu ly ket qua tra ve
            $event = [];
            while ($row = $stmt->fetch()) {
                $bacsi = new bacSi ($row['id'],$row['tenBacSi'], $row['chuyenKhoa']);
                $bacsis[] = $bacsi;
            }
            return $bacsi;
        }catch (PDOException $e){
            echo "error: ".$e ->getMessage() ;
//
          return $bacsi  = [];

        }
    }
}



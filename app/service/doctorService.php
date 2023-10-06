<?php
    require_once APP_ROOT.'/app/model/doctor.php';

    class DoctorService{
        public static function getAll(){
            try{
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','123');
                $sql = "SELECT * from doctor ORDER BY idDoctor ASC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $Doctors = [];
                while($row = $stmt->fetch()){
                    $Doctor = new Doctor($row['idDoctor'],$row['nameDoctor'], $row['specialist']);
                    $Doctors[] = $Doctor;
                }
                return $Doctors;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public static function addDoctor($nameDoctor,$specialist){
            try {
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','');
        
                $sql = "INSERT INTO doctor (nameDoctor, specialist) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$nameDoctor,$specialist]);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public static function findById($id)
        {
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');//
            $sql = "SELECT * from doctor where idDoctor=? ";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            $Doctor = new Doctor($data['idDoctor'],$data['nameDoctor'], $data['specialist']);
            return $Doctor;
        }

        public static function editDoctor($idDoctor, $nameDoctor,$specialist)
        {   
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
            
            $sql = "UPDATE doctor SET nameDoctor=?, specialist=? WHERE idDoctor=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nameDoctor,$specialist, $idDoctor]);
        }
        
        public static function deleteDoctor($id)
        {
            $conn = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
            $sql = "DELETE from doctor where idDoctor = ?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$id]);
            
        }
    }
?>
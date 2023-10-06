<?php
    require_once APP_ROOT.'/app/model/patient.php';

    class PatinetService{
        public static function getAll(){
            try{
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','');
                $sql = "SELECT * FROM patient ORDER BY idPatient ASC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $Patinets = [];
                while($row = $stmt->fetch()){
                    $Patinet = new Patient($row['idPatient'],$row['namePatient'], $row['datePatient'], $row['symptom'], $row['idDoctor']);
                    $Patinets[] = $Patinet;
                }
                return $Patinets;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public static function addPatient($namePatient, $datePatient, $symptom, $idDoctor){
            try {
                $conn = new PDO('mysql:host=localhost;dbname=clinic','root','123');
        
                $sql = "INSERT INTO patient (namePatient, datePatient, symptom, idDoctor) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$namePatient, $datePatient, $symptom, $idDoctor]);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>
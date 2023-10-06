<?php 
require_once APP_ROOT.'/app/service/patientService.php';
class PatientController{
    public function index(){
        $datas = PatinetService::getAll();

        include APP_ROOT.'/app/view/patient/list.php';
    }
    
    public function Add(){
        include APP_ROOT.'/app/view/patient/add.php';

    }
    public function Store_Add(){
        if (isset($_POST['sbm'])) {
            $namePatient = $_POST['namePatient'];
            $datePatient = $_POST['datePatient'];
            $symptom = $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];
            PatinetService::addPatient($namePatient, $datePatient, $symptom, $idDoctor);
            header('Location:' . DOMAIN . "/public/indexPatient.php");
        }
    }
}
?>

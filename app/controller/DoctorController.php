<?php 
require_once APP_ROOT.'/app/service/doctorService.php';
class doctorController{
    public function index(){
        $datas = DoctorService::getAll();

        include APP_ROOT.'/app/view/doctor/list.php';
    }
    
    public function Add(){
        include APP_ROOT.'/app/view/doctor/add.php';

    }
    public function Store_Add(){
        if (isset($_POST['sbm'])) {
            $nameDoctor = $_POST['nameDoctor'];
            $specialist = $_POST['specialist'];
            DoctorService::addDoctor($nameDoctor,$specialist);
            header('Location:' . DOMAIN . "/public/indexDoctor.php");
        }
    }

    public function Edit(){
        $id = $_GET['id']; 
        $Doctor = DoctorService::findById($id);
        include APP_ROOT.'/app/view/doctor/edit.php';
    }

    public function Update()
    {
        if (isset($_POST['sbm'])) {
            $idDoctor = $_POST['idDoctor'];
            $nameDoctor = $_POST['nameDoctor'];
            $specialist = $_POST['specialist'];
    
            DoctorService::editDoctor($idDoctor, $nameDoctor,$specialist);
            header('Location:' . DOMAIN . "/public/indexDoctor.php");
        }
    }

    public function Delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            DoctorService::deleteDoctor($id);
            header('Location:' . DOMAIN . "/public/indexDoctor.php");
        }
    }
}
?>

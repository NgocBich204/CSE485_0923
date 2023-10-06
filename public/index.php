<?php
require_once ('../app/config/config.php');
require_once APP_ROOT.'/app/config/config.php';
require_once APP_ROOT.'/app/services/BacSiService.php';
require_once APP_ROOT.'/app/services/BenhNhanService.php';

//$BenhNhanService = new BenhNhanService();
//$Phongmach =$BenhNhanService->getAllBenhNhan();
//echo "<pre>";
//print_r($Phongmach);
//echo "<pre>";

require_once APP_ROOT.'/app/controllers/HomeController.php';
$homeController = new HomeController();
$homeController ->index();
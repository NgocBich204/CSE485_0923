<?php

require_once APP_ROOT . '/app/services/BacSiService.php';
require_once APP_ROOT.'/app/services/BenhNhanService.php';

class HomeController
{
    public function index()
    {
        $BenhNhanService = new BacSiService();
        $BenhNhanService = $BenhNhanService->getAllBacsiserver();
        include APP_ROOT . '/app/views/home/index.php';

    }
}


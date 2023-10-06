<?php
    require_once('../app/config/config.php');

    $route = isset($_GET['route'])?$_GET['route']:'patient';
    $action = isset($_GET['action'])?$_GET['action']:'index';

    $controller = ucfirst($route);
    $Controller = $controller . "Controller";
    $controllerPath = '/app/controller/' . $Controller . '.php';
    require_once(APP_ROOT . $controllerPath);
    $objController = new $Controller();
    $objController->$action();

?>
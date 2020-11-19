<?php

include './model/Team.php';


$controllerReq = isset($_GET['c']) ? $_GET['c'] : 'Page';
$actionReq = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controllerReq) . 'Controller';
$controllerFile = './controller/' . $controllerName . '.php';

if(file_exists($controllerFile)) {
    
    include $controllerFile;

    $controller = new $controllerName();

    if(method_exists($controller, $actionReq)) {
        $controller->$actionReq();
    } else {
        $controller->index();
    }

} else {

    include './controller/PageController.php';
    
    $controller = new PageController();
    $controller->index();
}




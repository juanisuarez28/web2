<?php
require_once "tasksController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


//lee la accion
if(!empty($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action='home';
}

$params= explode('/', $action);

$taskController= new tasksController();

switch($params[0]){
    case 'home':
        $taskController->showHome();
        break;
    case 'createTask':
        $taskController->createTask();
        break;
    case 'deleteTask':
        $taskController->deleteTask($params[1]);//al pasar parametros por el route, le paso params en la pos1, y le puedo llevar parametros
        break;
    case 'updateTask':
        $taskController->updateTask($params[1]);
        break;
    case 'viewTask':
        $taskController->viewTask($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
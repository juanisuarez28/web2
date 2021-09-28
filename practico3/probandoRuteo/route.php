<?php
require_once "db.php";
require_once "tasks.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


//lee la accion
if(!empty($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action='home';
}

$params= explode('/', $action);

switch($params[0]){
    case 'home':
        showHome();
        break;
    case 'createTask':
        createTask();
        break;
    case 'deleteTask':
        deleteTask($params[1]);//al pasar parametros por el route, le paso params en la pos1, y le puedo llevar parametros
        break;
    case 'updateTask':
        updateTask($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
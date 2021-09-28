<?php

class TasksView{



    function __construct(){
        
    }
    function showHomeRedirect(){
        header("Location: ".BASE_URL."home");
    }
    function showTasks($tasks){
        $html='<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
            <h1>Tareas 2021</h1>
    
            <ul class="list-group">';
    
                foreach($tasks as $tarea) {
                    if($tarea->finalizada==1){
                        $html.='<li class="list-group-item"> <strike>'.$tarea->titulo.': '.$tarea->descripcion.'- '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</strike> </li>';
    
                    }else{
                        $html.='<li class="list-group-item">'.'<a  href="viewTask/'.$tarea->id_tarea.'">'.$tarea->titulo.'</a>: '.$tarea->descripcion.'- '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</li>';
                    }
                }
        
            $html.='
            </ul>
    
            <h2>Crear Tarea:</h2>
            <form action="createTask" method="post">
                <input type="text" name="title" id="title">
                <input type="text" name="description" id="description">
                <input type="number" name="priority" id="priority">
                <input type="checkbox" name="done" id="done">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
    
        </body>
        </html>';
    
        echo $html;
    }

    function showTask($task){
        $page='<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
        <a href="'.BASE_URL.'home"> Volver </a>
            <ul class="list-group">
                <li class="list-group-item">'.$task->titulo.'</li>
                <li class="list-group-item">'.$task->descripcion.'</li>
                <li class="list-group-item">'.$task->finalizada.'</li>
            </ul>
        </body>
        </html>';

        echo $page;
    }

}
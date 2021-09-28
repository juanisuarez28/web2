<?php

function showHome(){
    
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

            $tasks=getTasks();
            foreach($tasks as $tarea) {
                if($tarea->finalizada==1){
                    $html.='<li class="list-group-item"> <strike>'.$tarea->titulo.': '.$tarea->descripcion.'- '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</strike> </li>';

                }else{
                    $html.='<li class="list-group-item">'.$tarea->titulo.': '.$tarea->descripcion.'- '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</li>';
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

function createTask(){
    if(!isset($_POST['done'])){
        $done=0;
    }else{                //para que no tire error el checkbox 'done', y cuando no le pase nada sea =0;
        $done=1;
    }
    insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
    header("Location: home"); //hago un redirect para que luego de ejecutarse la funcion, me lleve al home directamente
}

function deleteTask($id){
    deleteTaskFromDb($id);//llamo a la funcion en db
    header("Location: ".BASE_URL."home");//redirijo
}

function updateTask($id){
    updateTaskFromDb($id);
    header("Location: ".BASE_URL."home");//redirijo
}
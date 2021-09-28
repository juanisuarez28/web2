<?php
//en este archivo php, hag todo lo relacionado a la base de datos

function getTasks(){
    $db = new PDO('mysql:host=localhost;'
                .'dbname=db_tasks;charset=utf8', 'root', '');//con esto me conecto a la base de datos
    $sentencia= $db->prepare("select * from tasks");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $tareas;

}

function insertTask($titulo, $descripcion, $prioridad, $finalizada){
    $db = new PDO('mysql:host=localhost;'
                .'dbname=db_tasks;charset=utf8', 'root', '');//me conecto
    $sentencia = $db->prepare("INSERT INTO tasks(titulo, descripcion, prioridad, finalizada) VALUES(?,?,?,?)");//preparo la sentencia con lo que le voy a pasar
    $sentencia->execute(array($titulo, $descripcion, $prioridad, $finalizada));//la ejecuto y le paso los parametros en orden y cantidad
                       
}

function deleteTaskFromDb($id){
    $db = new PDO('mysql:host=localhost;'
                .'dbname=db_tasks;charset=utf8', 'root', '');//me conecto
    $sentencia = $db->prepare("DELETE FROM tasks WHERE id_tarea=?");//preparo la sentencia   
    $sentencia->execute(array($id));//la ejecuto ahora si pasandole el id a borrar
}

function updateTaskFromDb($id){
    $db = new PDO('mysql:host=localhost;'
                .'dbname=db_tasks;charset=utf8', 'root', '');//me conecto
    $sentencia = $db->prepare("UPDATE tasks SET finalizada=1 WHERE id_tarea=?");//preparo la sentencia   
    $sentencia->execute(array($id));//ejecuto          
}
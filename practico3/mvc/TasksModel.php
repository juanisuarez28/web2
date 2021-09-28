<?php

class TasksModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia= $this->db->prepare("select * from tasks");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    function getTask($id){
        $sentencia= $this->db->prepare("select * from tasks WHERE id_tarea=?");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }

    function insertTask($titulo, $descripcion, $prioridad, $finalizada){
        $sentencia = $this->db->prepare("INSERT INTO tasks(titulo, descripcion, prioridad, finalizada) VALUES(?,?,?,?)");//preparo la sentencia con lo que le voy a pasar
        $sentencia->execute(array($titulo, $descripcion, $prioridad, $finalizada));
    }

    function deleteTask($id){
        $sentencia = $this->db->prepare("DELETE FROM tasks WHERE id_tarea=?");   
        $sentencia->execute(array($id));
    }

    function updateTask($id){
        $sentencia = $this->db->prepare("UPDATE tasks SET finalizada=1 WHERE id_tarea=?");//preparo la sentencia   
        $sentencia->execute(array($id));
    }
}
<?php
require_once "Model/tasksModel.php";
require_once "View/tasksView.php";
class TasksController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new tasksModel();
        $this->view=new tasksView();
    }
    function showHome(){
        $tasks=$this->model->getTasks();
        $this->view->showTasks($tasks);
    }

    function createTask(){
        if(!isset($_POST['done'])){
            $done=0;
        }else{                //para que no tire error el checkbox 'done', y cuando no le pase nada sea =0;
            $done=1;
        }
        $this->model->insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
        $this->view->showHomeRedirect();
    }

    function deleteTask($id){
        $this->model->deleteTask($id);
        $this->view->showHomeRedirect();
    }

    function updateTask($id){
        $this->model->updateTask($id);
        $this->view->showHomeRedirect();
    }

    function viewTask($id){
        $task=$this->model->getTask($id);
        $this->view->showTask($task);
    }
}
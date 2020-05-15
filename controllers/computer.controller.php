<?php
require_once 'models/computer.model.php';
require_once 'views/computer.view.php';

class ComputerController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ComputerModel();
        $this->view = new ComputerView();
    }

    public function  showComputers()
    {
        // pido las tareas al MODELO
        $computadora = $this->model->getAll();
        $esAdmin = true;//simulación de true=logueado o false NO Logueado.
        // actualizo la vista
        $this->view->showComputer($computadora, $esAdmin);
    }

    public function showComputersByMark($marca)
    {
        $computadora = $this->model->getComputersByMark($marca);
        // actualizo la vista
        $this->view->showComputerMarks($computadora);
    }

    public function ViewComputer($id)
    {
        $computadora = $this->model->getone($id);
        // actualizo la vista
        $this->view->ViewOne($computadora);
    }


    public function InsertComputer()
    {
        // toma los valores enviados por el usuario
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $sistOperativo = $_POST['sistOperativo'];
        $id_marca = $_POST['id_marca'];
        // inserta en la DB y redirige
        $success = $this->model->InsertOneComputer($nombre, $marca, $sistOperativo, $id_marca);
        if ($success)
            header('Location: ' . BASE_URL . "listar");
    }

    public function InsertMark()
    {
        // toma los valores enviados por el usuario
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $sistOperativo = $_POST['sistOperativo'];
        $id_marca = $_POST['id_marca'];
        // inserta en la DB y redirige
        $success = $this->model->InsertOneComputer($nombre, $marca, $sistOperativo, $id_marca);
        if ($success)
            header('Location: ' . BASE_URL . "listmarca");
    }
    public function deleteComputer($idcompuadora)
    {
        $success = $this->model->borrarcomputadora($idcompuadora);
        if ($success)
            header('Location: ' . BASE_URL . "listar");
    }

    public function showError($msg)
    {
        $this->view->showError($msg);
    }
}

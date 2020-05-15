<?php

require_once 'models/mark.model.php';
require_once 'views/mark.view.php';


class MarkController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new MarkModel();
        $this->view = new MarkView();
    }

    public function showMarks()
    {
        $marca = $this->model->getMarks();
        $esAdmin = true; //simulación de true=logueado o false NO Logueado.
        // actualizo la vista
        $this->view->marks($marca, $esAdmin);
    }

    public function insertMark()
    {
        // toma los valores enviados por el usuario
        $nombre = $_POST['nombreMark'];
        // inserta en la DB y redirige
        $success = $this->model->insertOneMark($nombre);
        if ($success)
            header('Location: ' . BASE_URL . "listar");
    }

    public function highMark()
    {
        // actualizo la vista
        $this->view->ShowForm();
    }

    //funcion para editar la marca
    public function editMark($idMark)
    {
        $mark = $this->model->getMark($idMark);
        $this->view->showFormEdit($mark);
    }

    //actualizo
    public function markEditado()
    {
        $nombre = $_POST['nombreMark'];
        $id = $_POST['idmark'];
        $this->model->modifyMark($id, $nombre);
        $this->showMarks();
    }

    //elimina la marca
    public function deleteMark($marca)
    {
        $this->model->borrarMark($marca);
        $marca = $this->model->getMarks();
        $esAdmin=true;
        $this->view->marks($marca,$esAdmin);
    }
}

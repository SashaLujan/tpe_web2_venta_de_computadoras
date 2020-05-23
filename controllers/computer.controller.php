<?php
require_once 'models/computer.model.php';
require_once 'views/computer.view.php';

class ComputerController
{
    //se crean variables globales
    private $modelComputer;
    private $view;
    private $esAdmin=false;

    public function __construct()
    {
        $this->modelComputer = new ComputerModel();
        $this->view = new ComputerView();
    }

    public function home(){
        $this->view->showHome();
    }

    public function  showComputers()
    {
        // pido las computadoras al MODELO
        $computadora = $this->modelComputer->getAll();
        // actualizo la vista
        $this->view->showComputer($computadora, $this->esAdmin);
    }

    public function showComputersMark($id_computadora,$marca)
    {
        $computadorapormarca = $this->modelComputer->getComputersByMark($marca);
        $computadora = $this->modelComputer->getone($id_computadora);
        // actualizo la vista
        if(!empty($computadora))
            $this->view->showComputersMark($computadora, $computadorapormarca);
        else
            $this->view->showError($msg);
    }

    public function showComputersByMark($marca){
        $computadorapormarca= $this->modelComputer->getComputersByMark($marca);
        $this->view->computerByMark($computadorapormarca);
    }

    //se muestra una computadora
    public function ViewComputer($id_computadora)
    {
        $computadoras = $this->modelComputer->getAll();
        $computadora = $this->modelComputer->getone($id_computadora);
        // actualizo la vista
        if(!empty($computadora))
            $this->view->showComputer($computadora, $computadoras);
        else
            $this->view->showError($msg);
    }

    public function showError($msg)
    {
        $this->view->showError($msg);
    }
}

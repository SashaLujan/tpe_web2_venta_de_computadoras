<?php

require_once 'models/marks.model.php';
require_once 'models/computers.model.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class PublicController{
    private $modelComputers;
    private $modelMarks;
    private $viewPublic;
    private $isAdmin;

    public function __construct()
    {
        $this->modelComputers = new ComputersModel();
        $this->modelMarks = new MarksModel();
        $this->viewPublic = new PublicView();
        $this->isAdmin = authHelper::userLogged();
    }

    public function home(){
        $this->viewPublic->showHome($this->isAdmin);
    }

    //muestra todas las computadoras de la db
    public function showComputer(){
        //pido las computadoras al modelo
        $computadoras = $this->modelComputers->getAll();
        //actualizo la vista
        $this->viewPublic->showComputers($computadoras, $this->isAdmin);
    }

    //muestra una sola computadora
    public function viewComputer($id_computadora){
        $computadoras = $this->modelComputers->getAll();
        $computadora = $this->modelComputers->get($id_computadora);

        if(!empty($computadora)){
            $this->viewPublic->showComputer($computadora, $computadoras, $this->isAdmin);
        } else
            $this->viewPublic->showError("La computadora no existe");
    }

    public function viewComputerMark($id_computadora,$marca){
        $computadoraPorMarca = $this->modelComputers->getComputerMarks($marca);
        $computadora = $this->modelComputers->get($id_computadora);

        if(!empty($computadora)){
            $this->viewPublic->showComputerMark($computadora, $computadoraPorMarca, $this->isAdmin);
        } else
            $this->viewPublic->showError("La computadora no existe");
    }

    //muestra todas las marcas de la db
    public function showMark(){
        //pido las marcas al modelo
        $marcas = $this->modelMarks->getAll();
        //actualizo la vista
        $this->viewPublic->showMarks($marcas, $this->isAdmin);
    }

    //muestro las computadoras de una marca en particular
    public function showComputerByMark($marca){
        $computadoraPorMarca = $this->modelComputers->getComputerMarks($marca);
        $this->viewPublic->computersByMark($computadoraPorMarca, $this->isAdmin);
    }

    public function showError($msg){
        $this->viewPublic->showError($msg);
    }
}
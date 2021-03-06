<?php

require_once 'models/marks.model.php';
require_once 'models/computers.model.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class PublicController
{
    private $modelComputers;
    private $modelMarks;
    private $viewPublic;

    public function __construct()
    {
        $this->modelComputers = new ComputersModel();
        $this->modelMarks = new MarksModel();
        $this->viewPublic = new PublicView();
    }

    public function home()
    {
        $this->viewPublic->showHome();
    }

    //muestra todas las computadoras de la db
    public function showComputer()
    {
        //pido las computadoras al modelo
        $computadora = $this->modelComputers->getComputerMarks();
        //$computadora = $this->modelComputers->getAll();
        //actualizo la vista
        $this->viewPublic->showComputers($computadora);
    }

    //muestra una sola computadora
    public function viewComputer($id_computadora)
    {
        //$computadoras = $this->modelComputers->getAll();
        $computadora = $this->modelComputers->get($id_computadora);

        if (!empty($id_computadora)) {
            $this->viewPublic->showComputer($computadora);
        } else
            $this->viewPublic->showError("error");
    }

    //muestra los datos de una computadora
    public function viewComputerMark($id_computadora)
    {
        $computadoraConMarca = $this->modelComputers->getComputerMarks();
        $computadora = $this->modelComputers->get($id_computadora);
        if (!empty($computadora)) {
            $this->viewPublic->showComputerMark($computadora, $computadoraConMarca);
        } else
            $this->viewPublic->showError("error con la computadora seleccionada");
    }

    //muestra todas las marcas de la db
    public function showMark()
    {
        //pido las marcas al modelo
        $marcas = $this->modelMarks->getAll();
        //actualizo la vista
        $this->viewPublic->showMarks($marcas);
    }

    //muestro las computadoras de una marca en particular
    public function showComputerByMark($marca)
    {
        $computadoraPorMarca = $this->modelComputers->getComputerByMarks($marca);
        if (empty($computadoraPorMarca)) {
            $this->viewPublic->showError("no hay computadoras");
        } else {
            $this->viewPublic->computersByMark($computadoraPorMarca);
        }
    }

    //muestra un error en pantalla
    public function showError($msg)
    {
        $this->viewPublic->showError($msg);
    }
}

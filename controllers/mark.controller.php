<?php

require_once 'models/mark.model.php';
require_once 'views/mark.view.php';

class MarkController
{
    //se crean variables glovales
    private $modelMark;
    private $view;
    private $esAdmin=false;

    public function __construct()
    {
        $this->modelMark = new MarkModel();
        $this->view = new MarkView();
    }

    public function showMarks()
    {
        $marca = $this->modelMark->getMarks();// actualizo la vista
        $this->view->marks($marca, $this->esAdmin);
    }

    public function showError($msg)
    {
        $this->view->showError($msg);
    }
}
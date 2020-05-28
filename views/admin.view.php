<?php

require_once 'libs/Smarty.class.php';

class AdminView{

    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function welcome($admin) {
        $this->smarty->assign('nombre_admin', $admin);
        $this->smarty->display('templates/welcome.tpl');
    }

    //muestra un formulario para elegir si quiere modificar computadoras o marcas
    public function chooseTask() {
        $this->smarty->display('templates/chooseTask.tpl');
    }

    //
    public function showComputers($computadoras) {
        $this->smarty->assign('listaComp', $computadoras);
        $this->smarty->display('templates/showComputersAdmin.tpl');
    }

    public function showMarks($marcas) {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->display('templates/showMarksAdmin.tpl');
    }    

    public function formComputerAdd($marcas, $error = null) {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formComputerAdd.tpl');
    }

    public function formMarkAdd($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formMarkAdd.tpl');
    }

    public function showFormEditComputer($computadora, $marca, $error = null){
        $this->smarty->assign('computadora', $computadora);
        $this->smarty->assign('listaMarca', $marca);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showFormEditComputer.tpl');
    }
    public function showFormEditMark($marca, $error = null){
        $this->smarty->assign('marca', $marca);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showFormEditMark.tpl');
    }
    public function showError($msg){
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }
}
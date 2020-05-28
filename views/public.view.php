<?php

require_once 'libs/Smarty.class.php';

class PublicView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }

    public function showHome($admin, $error = null){
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showHome.tpl');
    }

    public function showError($msg) {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }

    public function showComputers($computadoras, $admin, $error = null) {
        $this->smarty->assign('listaComp', $computadoras);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showComputers.tpl');
    }

    public function showComputer($computadora, $computadoras, $admin, $error = null) {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->assign('listaComp', $computadoras);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showComputer.tpl');
    }

    public function showComputerMark($computadora, $computadoras, $admin, $error = null) {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->assign('listaComp', $computadoras);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/computersByMark.tpl');
    }
    public function showMarks($marcas, $admin, $error = null) {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->assign('isAdmin', $admin);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showMarks.tpl');
    }    

    public function ComputersByMark($computadora, $admin, $error = null) {
       $this->smarty->assign('computadoraPorMarca', $computadora);
       $this->smarty->assign('isAdmin', $admin);
       $this->smarty->assign('error', $error);
       $this->smarty->display('templates/computersByMark.tpl');
    }
}
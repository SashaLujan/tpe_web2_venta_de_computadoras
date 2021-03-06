<?php

require_once 'libs/Smarty.class.php';
require_once 'helpers/auth.helper.php';

class PublicView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $admin = authHelper::userLogged();
        $this->smarty->assign('isAdmin', $admin);
        $nameUser = authHelper::nameLogged();
        $this->smarty->assign('nameUser', $nameUser);
        $type = authHelper::typeLogged();
        $this->smarty->assign('type', $type);
    }

    public function showHome($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showHome.tpl');
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }

    //muetra todas las computadoras
    public function showComputers($computadora)
    {
        $this->smarty->assign('listaComp', $computadora);
        $this->smarty->display('templates/showComputers.tpl');
    }

    //muetra una computadora 
    public function showComputer($computadora)
    {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->display('templates/showComputer.tpl');
    }

    //muetra la computadora de una marca
    public function showComputerMark($computadora)
    {
        $this->smarty->assign('datosComp', $computadora);
        //$this->smarty->assign('listaComp', $computadoraConMarca);
        $this->smarty->display('templates/computersMark.tpl');
    }

    //muetra todas las marcas
    public function showMarks($marcas)
    {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->display('templates/showMarks.tpl');
    }

    //muetra todas las computadoras de una marca
    public function ComputersByMark($computadoraPorMarca)
    {
        $this->smarty->assign('computadoraPorMarca', $computadoraPorMarca);
        $this->smarty->display('templates/computersByMark.tpl');
    }

    //muestra un formulario para poder cargar un usuario nuevo
    public function formCheck($error=null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formUser.tpl');
    }
}

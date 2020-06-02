<?php

require_once 'libs/Smarty.class.php';

class PublicView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $admin = authHelper::userLogged();
        $this->smarty->assign('isAdmin', $admin);
        $nameAdmin = authHelper::nameLogged();
        $this->smarty->assign('nameAdmin', $nameAdmin);
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
    public function showComputers($computadoras, $error = null)
    {
        $this->smarty->assign('listaComp', $computadoras);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showComputers.tpl');
    }

    //muetra una computadora 
    public function showComputer($computadora, $error = null)
    {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showComputer.tpl');
    }

    //muetra la computadora de una marca
    public function showComputerMark($computadora, $error = null)
    {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/computersMark.tpl');
    }

    //muetra todas las marcas
    public function showMarks($marcas, $error = null)
    {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showMarks.tpl');
    }

    //muetra todas las computadoras de una marca
    public function ComputersByMark($computadoraPorMarca, $error = null)
    {
        $this->smarty->assign('computadoraPorMarca', $computadoraPorMarca);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/computersByMark.tpl');
    }
}

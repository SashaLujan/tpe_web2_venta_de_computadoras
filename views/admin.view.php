<?php

require_once 'libs/Smarty.class.php';

class AdminView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $nameAdmin = authHelper::nameLogged();
        $this->smarty->assign('nameAdmin', $nameAdmin);
    }

    //muestra un formulario para agregar una computadora nueva
    public function formComputerAdd($marcas)
    {
        $this->smarty->assign('listaMarca', $marcas);
        $this->smarty->display('templates/formComputerAdd.tpl');
    }

    //muestra un formulario para agregar una marca
    public function formMarkAdd($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formMarkAdd.tpl');
    }

    //muestra un formulario para editar una computadora
    public function showFormEditComputer($computadora, $marca)
    {
        $this->smarty->assign('datosComp', $computadora);
        $this->smarty->assign('listaMarca', $marca);
        $this->smarty->display('templates/showFormEditComputer.tpl');
    }

    //muestra un formulario para editar una marca
    public function showFormEditMark($marca)
    {
        $this->smarty->assign('listaMarca', $marca);
        $this->smarty->display('templates/showFormEditMark.tpl');
    }

    //elimina una computadora
    public function deleteComputer($computadora)
    {
        $this->smarty->assign('computadora', $computadora);
        $this->smarty->display('templates/formDeleteComputer.tpl');
    }

    //elmina una marca
    public function deleteMark($marca)
    {
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('templates/formDeleteMark.tpl');
    }

    //mustra todos los usuarios y administradores logueados
    public function showUsers($usuarios, $tipos)
    {
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->assign('tipos', $tipos);
        $this->smarty->display('templates/showUsers.tpl');
    }

    //elimina un usuario
    public function deleteUser($usuario)
    {
        $this->smarty->assign('usuario', $usuario);
        $this->smarty->display('templates/formUserDelete.tpl');
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }
}

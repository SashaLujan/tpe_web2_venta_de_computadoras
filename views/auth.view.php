<?php

require_once('libs/Smarty.class.php');

class AuthView
{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function chooseTask() {
        $this->smarty->display('chooseTask.tpl');
    }

    public function welcome($admin) {
        $this->smarty->assign('nombre_admin', $admin);
        $this->smarty->display('welcome.tpl');
    }

    public function showComputer($computadora){
        $this->smarty->assign('listaComputadora', $computadora);
        $this->smarty->display('computerAuth.tpl');
    }

    public function marks($marca){
        $this->smarty->assign('listaMarca', $marca);
        $this->smarty->display('marksAuth.tpl');
    }

    public function formComputer($marca){
        $this->smarty->assign('listaMarca', $marca);
        $this->smarty->display('formComputer.tpl');
    }

    public function formMark(){
        $this->smarty->display('formMark.tpl');
    }

    public function editComputer($computadora){
        $this->smarty->assign('computadora', $computadora);
        $this->smarty->display('editComputer.tpl');
    }

    public function editMark($marca){
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('editMark.tpl');

    }

    public function showError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mensaje", $msg);
        $smarty->display('error.tpl');
    }
}

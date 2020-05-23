<?php
require_once('libs/Smarty.class.php');

class ComputerView
{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }

    public function showComputer($computadora, $esAdmin)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaComputadora", $computadora);
        $smarty->assign("esadmin", $esAdmin);
        $smarty->display('computer.tpl');
    }

    public function showComputersMark($computadora)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listComputersByMark", $computadora);
        $smarty->display('computerMarks.tpl');
    }

    public function computerByMark($computadorapormarca) {
        $this->smarty->assign('computadorapormarca', $computadorapormarca);
        $this->smarty->display('computerByMark.tpl');
     }
 

    public function ViewComputer($id_computadora)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaComputadora", $id_computadora);
        $smarty->display('viewComp.tpl');
    }

    public function showError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mensaje", $msg);
        $smarty->display('error.tpl');
    }
}

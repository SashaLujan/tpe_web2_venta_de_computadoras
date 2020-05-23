<?php
require_once('libs/Smarty.class.php');

class MarkView
{
    public function marks($marca, $esAdmin)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaMarca", $marca);
        $smarty->assign("esadmin", $esAdmin);
        $smarty->display('marks.tpl');
    }

    public function computerByMark($computadorapormarca) {
        $this->smarty->assign('computadorapormarca', $computadorapormarca);
        $this->smarty->display('templates/printPlayersByDivision.tpl');
     } 

    public function showError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mensaje", $msg);
        $smarty->display('error.tpl');
    }
}

<?php
require_once('libs/Smarty.class.php');

class ComputerView
{
    public function showComputer($computadora, $esAdmin)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listaComputadora", $computadora);
        $smarty->assign("esadmin", $esAdmin);
        $smarty->display('showComputer.tpl');
    }

    public function showComputerMarks($computadora)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listComputersByMark", $computadora);
        $smarty->display('showComputerMarks.tpl');
    }

    public function ViewOne($id)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("identif", $id);
        $smarty->display('ViewOne.tpl');
    }

    public function showError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mensaje", $msg);
        $smarty->display('showError.tpl');
    }
}

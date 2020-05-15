<?php
require_once('libs/Smarty.class.php');

class MarkView
{
    public function marks($marca, $esAdmin)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listamarca", $marca);
        $smarty->assign("esadmin", $esAdmin);
        $smarty->display('marks.tpl');
    }

    public function ShowForm()
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->display('ShowForm.tpl');
    }

    public function deleteMark($marca)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("listamarca", $marca);
        $smarty->display('marks.tpl');
    }

    public function showFormEdit($mark)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mark", $mark);
        $smarty->display('showFormEditMark.tpl');
    }

    public function showError($msg)
    {
        $smarty = new Smarty();
        $smarty->assign("base_url", BASE_URL);
        $smarty->assign("mensaje", $msg);
        $smarty->display('showError.tpl');
    }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 05:51:39
  from 'C:\xampp\htdocs\tpe\templates\ViewOne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe11cb1b6eb9_24618024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1304d659506c75d722077321b1d3962061b9288' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\ViewOne.tpl',
      1 => 1589511810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ebe11cb1b6eb9_24618024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1> Marca :<?php echo strtoupper($_smarty_tpl->tpl_vars['identif']->value[0]->id_marca);?>
</h1>
    <h2>Computadora: <?php echo strtoupper($_smarty_tpl->tpl_vars['identif']->value[0]->id_computadora);?>
</h2>
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['identif']->value, 'computadora');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['computadora']->value) {
?>
        <tr>
            <td>Marca: <b><?php echo $_smarty_tpl->tpl_vars['computadora']->value->marca;?>
</b> </td>
            <td>Sistema operativo: <b><?php echo $_smarty_tpl->tpl_vars['computadora']->value->sistOperativo;?>
</b> </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table><?php }
}

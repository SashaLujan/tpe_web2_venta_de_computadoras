<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 05:25:24
  from 'C:\xampp\htdocs\tpe\templates\marks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe0ba4904d78_31573207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61586f2881fa4b835ba60b42f36813eeda1fc6fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\marks.tpl',
      1 => 1589511768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ebe0ba4904d78_31573207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Marcas disponibles</h2>
<table class='table table-hover table-striped table-bordered table table-condensed' style='width:400px'>
       <tr style='color:black'><th scope='col'>MARCA</th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listamarca']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
           <tr>
             <td><a href='computadora_por_marca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
' class='btn btn-link '><?php echo strtoupper($_smarty_tpl->tpl_vars['marca']->value->nombre);?>
</a>  
             <?php if ($_smarty_tpl->tpl_vars['esadmin']->value == 1) {?>
                  <td> <a href='borrar_marca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
 class='btn btn-link>Borrar </a></td>
                  <td> <a href='editar_marca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
 class='btn btn-link>Editar </a></td>
              <?php }?>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

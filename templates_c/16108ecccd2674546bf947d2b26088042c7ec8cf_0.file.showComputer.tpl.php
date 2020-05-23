<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-18 21:15:21
  from 'C:\xampp\htdocs\tpe\templates\showComputer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec2dec92558e4_33838213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16108ecccd2674546bf947d2b26088042c7ec8cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\showComputer.tpl',
      1 => 1589827979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ec2dec92558e4_33838213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <table>
            <tr>
                <th scope='col'><a class="navbar-brand" href="admin">Alta de un Producto</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </th>
            </tr>
        </table>
       <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
       <tr><th scope='col'>Computadora</th><th scope='col'>Marca</th><th scope='col'>Sistema Operativo</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaComputadora']->value, 'computadora');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['computadora']->value) {
?>
           <tr>
             <td> <b> <?php echo $_smarty_tpl->tpl_vars['computadora']->value->nombre;?>
 </b> </td>
            <td> <b> <?php echo $_smarty_tpl->tpl_vars['computadora']->value->marca;?>
</b> </td>
                <td> <b><?php echo $_smarty_tpl->tpl_vars['computadora']->value->sistOperativo;?>
</b> </td>
                <td> <a href="vercomputadora/<?php echo $_smarty_tpl->tpl_vars['computadora']->value->id_computadora;?>
" class="btn btn-link">Ver</a></td>
                <?php if ($_smarty_tpl->tpl_vars['esadmin']->value == 1) {?> 
                    <td> <a href="borrar_computadora/<?php echo $_smarty_tpl->tpl_vars['computadora']->value->id_computadora;?>
" class="btn btn-link">Borrar </a></td>
                    <td> <a href="editar_computadora/<?php echo $_smarty_tpl->tpl_vars['computadora']->value->id_computadora;?>
" class="btn btn-link">Editar </a></td>
                <?php }?>
                </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['esadmin']->value == 1) {?> 
        <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
            <tr><th scope='col'><h2> Productos disponibles </h2></th><th scope='col'><a class="navbar-brand" href="formAltaProducto">Alta de un Producto</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </span>
                </th>
            </tr>
        </table>
    <?php }
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 05:50:52
  from 'C:\xampp\htdocs\tpe\templates\ShowFormUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe119c151d07_14342133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f16cbb511b4d852facdab22b26b13942026b6d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\ShowFormUser.tpl',
      1 => 1589514602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ebe119c151d07_14342133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        <h1>Logueo de usuarios:</h1>
        <div class="row">
        <div class="col-6">
        <form action="verificar" method="post" class="my-4">
            <div class="form-group">
                <label>Nombre de Usuario</label>
                <input name="nombre_usuario" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contrasenia" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>
        <?php }
}

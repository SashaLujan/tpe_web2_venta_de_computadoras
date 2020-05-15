<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 07:12:37
  from 'C:\xampp\htdocs\tpe\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe24c5a76485_22784757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81077fad5cb5b9d177563f2deabd56b06458f82e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\showError.tpl',
      1 => 1589517306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ebe24c5a76485_22784757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class='text-center'>
    <h2>Error</h2>
    <h5><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h5>
    <img src='imagenes/logo.jpeg'height='60' width='60'>
</div>
<div class="text-center"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Volver</a></div>
</div><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 20:45:40
  from 'C:\xampp\htdocs\tpe\templates\marks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec81dd4f0bc93_18088205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61586f2881fa4b835ba60b42f36813eeda1fc6fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\marks.tpl',
      1 => 1590129342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ec81dd4f0bc93_18088205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php ob_start();
echo !$_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>         <div class="titulo_ver_comp">
            <p><b>Marcas</b></p>
        </div>
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>         <div class="centrar btn_alta">  
            <h4><a class="btn btn-danger" href="agregarMarca"><b>Alta</b></a></h4>
        </div>
    <?php }?>
    <div class="contenedor">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaMarca']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?> 
            <div class="contenedor_marca">
                <div class="centrar">
                    <b class="nombre"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</b>
                </div>
                <div class="centrar">
                    <a class="btn btn-danger" href="marca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Ver Computadoras</a>
                </div>
                <?php ob_start();
echo !$_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>                     <div class="centrar">
                        <a class="btn btn-danger" href="computadorapormarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><b>Ver Computadoras</b></a>
                    </div>          
                <?php }?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['esAdmin']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>                     <div class="centrar">
                        <a class="btn btn-danger" href="editarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><b>Modificar</b></a>
                        <a class="btn btn-danger" href="eliminarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><b>Baja</b></a>
                    </div>
                <?php }?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

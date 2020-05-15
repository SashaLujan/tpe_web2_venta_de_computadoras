<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 05:50:10
  from 'C:\xampp\htdocs\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe1172171c14_09137160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981943de502844b9fcf1c91843d17de001665ef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\header.tpl',
      1 => 1589514431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebe1172171c14_09137160 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="icon" href="">
            <title>Venta de computadoras</title>
        </head>
        <body>
        <div  class="panel panel-primary">
        <img src="imagenes/logo.jpeg" class="rounded float-left" height="50" width="50">
        <h1 class="text-center"style="color:black" > Venta de computadoras </h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary mb-3">
            <a class="navbar-brand" href="listar">Computadoras</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="navbar-brand" href="listmarca">Marcas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </li>
                <a class="navbar-brand" href="admin">Administrador</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </li>
                </ul>
            </div>
        </nav><?php }
}

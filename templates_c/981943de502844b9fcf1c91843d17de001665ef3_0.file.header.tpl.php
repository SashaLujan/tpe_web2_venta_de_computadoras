<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 05:36:56
  from 'C:\xampp\htdocs\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec748d8d0cb56_76701125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981943de502844b9fcf1c91843d17de001665ef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\header.tpl',
      1 => 1590118220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec748d8d0cb56_76701125 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <base href="<?php echo BASE_URL;?>
">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>TECNO</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="icon" href="imagenes/logo.jpeg">
            <link rel="stylesheet" href="css/styles.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><b>HOME</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="listaComputadora">COMPUTADORAS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listaMarca">MARCAS</a>
                        </li>
                    </ul>
                </div>
                <div class="login-container">
                    <form class="form_log" action="loguearse" method="POST">
                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Password" name="psw">
                        <button type="submit">Login</button>
                    </form>
                </div>
            </nav>
<?php }
}

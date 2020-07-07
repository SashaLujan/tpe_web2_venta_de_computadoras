<?php

require_once 'libs/router/Router.php';
require_once 'api/comments-api.controller.php';

//creo el ruteador usando la libreria externa que tengo guarda en la carpeta libs
$router = new Router();

//creo la tabla de ruteo
$router->addRoute('computadoras/:ID/comentarios', 'GET', 'CommentsApiController', 'getComments'); //obtengo todos los comentarios de una computadora
$router->addRoute('comentario/:ID', 'DELETE', 'CommentsApiController', 'deleteComment'); //Elimino un comentario (id del comentario)
$router->addRoute('comentario', 'POST', 'CommentsApiController', 'addComment'); //Agrego un comentario


//Rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);
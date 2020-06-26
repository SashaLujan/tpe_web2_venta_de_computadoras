<?php

require_once 'libs/router/router.php';
require_once 'api/comments-api.controller.php';

//creo el ruteador usando la libreria externa que tengo guarda en la carpeta libs
$router = new Router();

//creo la tabla de ruteo
$router->addRoute('comentarios/:ID', 'GET', 'CommentsApiController', 'getComments'); //obtengo todos los comentarios de una computadora


//Rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);
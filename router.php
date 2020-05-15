<?php
require_once 'controllers/computer.controller.php';
require_once 'controllers/mark.controller.php';
require_once 'controllers/auth.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
// define una acción por defecto
if (empty($_GET['action'])) {
    $_GET['action'] = 'listar';
}
// toma la acción que viene del usuario y parsea los parámetros
$accion = $_GET['action'];
$parametros = explode('/', $accion);
// decide que camino tomar según TABLA DE RUTEO
switch ($parametros[0]) {
    case 'insertar':
        $controller = new ComputerController();
        $controller->InsertComputer();
        break;
    case 'listar': // lista los productos
        $controller = new ComputerController();
        $controller->showComputers();
        break;
    case 'listmarca': // lista los rubros
        $controller = new MarkController();
        $controller->showMarks();
        break;
    case 'computadora_por_marca': // lista las computadoras por marca
        $controller = new ComputerController();
        $controller->showComputersByMark($parametros[1]);
        break;
    case 'vercomputadora': // detalles de la computadora
        $controller = new ComputerController();
        $controller->ViewComputer($parametros[1]);
        break;
    case 'admin':  //ACCESO PARA EL ADMINISTRADOR
        $controller = new AuthController();
        $controller->showLoguin();  //MUESTRA EL FORMULARIO DE LOGUEO
        break;
    case 'altaprod':  //Alta a una nueva computadora
        $controller = new ComputerController();
        $controller->InsertComputer();
        break;
    case 'altaMark':  //Alta a una nueva marca
        $controller = new MarkController();
        $controller->insertMark();
        break;
    case 'verificar':
        $controller = new AuthController();
        $controller->verifyUser();
        break;
    case 'borrar_marca': //baja de marca
        $controller = new MarkController();
        $controller->deleteMark($parametros[1]);
        break;
    case 'borrar_computadora':  //Baja de computadora
        $controller = new ComputerController();
        $controller->deleteComputer($parametros[1]);
        break;
    default:
        $controller = new ComputerController();
        $controller->showError("404 not found");
        break;
}

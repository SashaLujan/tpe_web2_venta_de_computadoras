<?php

require_once 'controllers/computer.controller.php';
require_once 'controllers/mark.controller.php';
require_once 'controllers/auth.controller.php';
require_once 'controllers/login.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//defino una accion por defecto
if(empty($_GET['action'])){
    $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch($parametros[0]){
    case 'home': {
        $controller = new ComputerController();     
        $controller->home();
    break;
    }
    case 'listaComutadora': {
        $controller = new ComputerController();     
        $controller->showComputers();
    break;
    }
    case 'ver_comp': {
        $controller = new ComputerController();     
        $controller->ViewComputer($parametros[1]);
    break;
    }
    case 'listaMarca': {
        $controller = new MarkController();     
        $controller->showMarks();
    break;
    }
    case 'computadorapormarca': {
        $controller = new ComputerController();     
        $controller->showComputersByMark($parametros[1]);
    break;
    }

    // -- Acciones del auth.controller

    case 'computadora': {
        $controller = new AuthController();  
        $controller->computers();
    break;
    }

    case 'marca': {
        $controller = new AuthController();  
        $controller->marks();
    break;
    }

    case 'agregarComputadora': {
        $controller = new AuthController();  
        $controller->formComputer();
    break;
    }

    case 'guardarComputadora': {
        $controller = new AuthController();  
        $controller->addComputer();
    break;
    }
    
    case 'agregarMarca': {
        $controller = new AuthController();  
        $controller->formMark();
    break;
    }

    case 'guardarMarca': {
        $controller = new AuthController();  
        $controller->addMark();
    break;
    }
    case 'loguearse': {
        $controller = new LoginController();  
        $controller->loginAuth();
    break;
    }
    case 'elegirOpcion': {
        $controller = new AuthController();  
        $controller->showOption();
    break;
    }
    case 'editarComputadora': {
        $controller = new AuthController();  
        $controller->editComputer($parametros[1]);
    break;
    }
    case 'guardarEditComputadora': {
        $controller = new AuthController();  
        $controller->modifyComputer();
    break;
    }
    case 'eliminarComputadora': {
        $controller = new AuthController();  
        $controller->deleteComputer($parametros[1]);
    break;
    }
    case 'editarMarca': {
        $controller = new AuthController();  
        $controller->editMark($parametros[1]);
    break;
    }
    case 'guardarEditMarca': {
        $controller = new AuthController();  
        $controller->modifyMark();
    break;
    }
    case 'eliminarMarca': {
        $controller = new AuthController();  
        $controller->deleteMark($parametros[1]);
    break;
    }
    case 'cerrar_sesion': {
        $controller = new LoginController();     
        $controller->logout();
    break;
    }
    case 'ver_marca': {
        $controller = new MarkController();     
        $controller->showMarks($parametros[1],$parametros[2]);
    break;
    }
    default: {
        $controller = new ComputerController();     
        $controller->showError("Error, vuelva a intentarlo.","imagenes/logo.jpeg");
    }    
}
    
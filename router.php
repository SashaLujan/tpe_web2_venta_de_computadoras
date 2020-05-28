<?php
require_once 'controllers/public.controller.php';
require_once 'controllers/admin.controller.php';
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

    //acciones del public.controller
    case 'home': {
        $controller = new PublicController();     
        $controller->home();
    break;
    }
    case 'listaComp': {
        $controller = new PublicController();     
        $controller->showComputer();
    break;
    }
    case 'verComp': {
        $controller = new PublicController();     
        $controller->viewComputer($parametros[1]);
    break;
    }
    case 'listaMarca': {
        $controller = new PublicController();     
        $controller->showMark();
    break;
    }
    case 'marca_comp': {
        $controller = new PublicController();     
        $controller->showComputerByMark($parametros[1]);
    break;
    }

    //acciones del admin.controller

    case 'computadoras': {
        $controller = new AdminController();  
        $controller->computers();
    break;
    }

    case 'marcas': {
        $controller = new AdminController();  
        $controller->marks();
    break;
    }

    case 'agregarComp': {
        $controller = new AdminController();  
        $controller->formComputer();
    break;
    }

    case 'guardarComp': {
        $controller = new AdminController();  
        $controller->addComputer();
    break;
    }
    
    case 'agregarMarca': {
        $controller = new AdminController();  
        $controller->formMark();
    break;
    }

    case 'guardarMarca': {
        $controller = new AdminController();  
        $controller->addMark();
    break;
    }

    case 'loguearse': {
        $controller = new LoginController();  
        $controller->loginAdmin();
    break;
    }
    case 'elegirOpcion': {
        $controller = new AdminController();  
        $controller->showOption();
    break;
    }

    case 'editarComp': {
        $controller = new AdminController();  
        $controller->editComputer($parametros[1]);
    break;
    }
    case 'guardarEditComputer': {
        $controller = new AdminController();  
        $controller->modifyComputer();
    break;
    }
    case 'eliminarComp': {
        $controller = new AdminController();  
        $controller->deleteComputer($parametros[1]);
    break;
    }
    case 'editarMarca': {
        $controller = new AdminController();  
        $controller->editMark($parametros[1]);
    break;
    }
    case 'guardarEditMarca': {
        $controller = new AdminController();  
        $controller->modifyMark();
    break;
    }
    case 'eliminarMMarca': {
        $controller = new AdminController();  
        $controller->deleteMark($parametros[1]);
        header ('Location: ' .BASE_URL. 'listaMarca');
    break;
    }
    case 'cerrar_sesion': {
        $controller = new LoginController();     
        $controller->logout();
    break;
    }
    case 'verCompMarca': {
        $controller = new PublicController();     
        $controller->viewComputerMark($parametros[1],$parametros[2]);
    break;
    }
    default: {
        $controller = new PublicController();     
        $controller->showError("Se ha producido un error, vuelva a intentarlo","imagenes/logo.jpeg");
    }    
}
    
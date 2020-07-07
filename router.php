<?php
require_once 'controllers/public.controller.php';
require_once 'controllers/admin.controller.php';
require_once 'controllers/login.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

//defino una accion por defecto
if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch ($parametros[0]) {

                //acciones del public.controller
        case 'home':
                $controller = new PublicController();
                $controller->home();
                break;
        case 'listaComp':
                $controller = new PublicController();
                $controller->showComputer();
                break;
        case 'verComp':
                $controller = new PublicController();
                $controller->viewComputer($parametros[1]);
                break;
        case 'listaMarca':
                $controller = new PublicController();
                $controller->showMark();
                break;
        case 'marca_comp':
                $controller = new PublicController();
                $controller->showComputerByMark($parametros[1]);
                break;
        case 'ver_comp_marca':
                $controller = new PublicController();
                $controller->viewComputerMark($parametros[1],$parametros[2]);
                break;

                //acciones del admin.controller

        case 'agregarComp':
                $controller = new AdminController();
                $controller->formComputer();
                break;
        case 'guardarComp':
                $controller = new AdminController();
                $controller->addComputer();
                break;
        case 'agregarMarca':
                $controller = new AdminController();
                $controller->formMark();
                break;
        case 'guardarMarca':
                $controller = new AdminController();
                $controller->addMark();
                break;
        case 'editarComp':
                $controller = new AdminController();
                $controller->editComputer($parametros[1]);
                break;
        case 'guardarEditComputer':
                $controller = new AdminController();
                $controller->modifyComputer();
                break;
        case 'eliminarComp':
                $controller = new AdminController();
                $controller->deleteComputer($parametros[1]);
                break;
        case 'editarMarca':
                $controller = new AdminController();
                $controller->editMark($parametros[1]);
                break;
        case 'guardarEditMarca':
                $controller = new AdminController();
                $controller->modifyMark();
                break;
        case 'eliminarMarca':
                $controller = new AdminController();
                $controller->deleteMark($parametros[1]);
                break;

                //acciones del login.controller

        case 'loguearse':
                $controller = new LoginController();
                $controller->loginAdmin();
                break;
        case 'cerrar_sesion':
                $controller = new LoginController();
                $controller->logout();
                break;
        case 'registrarse':
                $controller = new LoginController();
                $controller->formCheckIn();
                break;
        case 'guardar_usuario':
                $controller = new LoginController();
                $controller->addUser();
                break;
        case 'listar_usuarios':
                $controller = new LoginController();
                $controller->showUsers();
                break;
        case 'eliminar_usuario':
                $controller = new LoginController();
                $controller->deleteUser($parametros[1]);
        break;
        case 'editar_usuario':
                $controller = new LoginController();
                $controller->editUser($parametros[1]);
        break;

        default:
                $controller = new PublicController();
                $controller->showError("Se ha producido un error, vuelva a intentarlo", "imagenes/logo.jpeg");
}

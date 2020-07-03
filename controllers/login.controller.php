<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';

class LoginController
{
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct()
    {
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //verifica que el usuario ingresado sea correcto
    public function loginAdmin()
    {
        if (empty($_POST['username']) || empty($_POST['contraseña'])) {
            $this->viewPublic->showHome("Completar todos los campos", session_status() === PHP_SESSION_ACTIVE);
        } else {
            $username = $_POST['username'];
            $password = $_POST['contraseña'];
            $user = $this->modelLogin->getAdmin($username);
            if ($user) {
                if (password_verify($password, $user->contraseña)) {
                    if (session_status() != PHP_SESSION_ACTIVE) {
                        session_start(); //abro la sesion
                    }
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['nombre_usuario'] = $user->nombre; //guardo el nombre de usuario
                    $_SESSION['TIPO'] = $user->tipo;
                    header('Location: ' . BASE_URL . 'home');
                } else {
                    $this->viewPublic->showHome("contraseña incorrecta", session_status() === PHP_SESSION_ACTIVE);
                }
            } else {
                $this->viewPublic->showHome("El usuario no exise", session_status() === PHP_SESSION_ACTIVE);
            }
        }
    }

    //cierra la sesion que esta abierta y redirige al home
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location:' . BASE_URL . 'home');
    }

    //agregar usuario
    public function addUser()
    {
        if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contraseña']) || empty($_POST['confirmarContraseña'])) {
            $this->viewPublic->formCheck("Todos los datos son obligatorios");
        } else {
            $nombre = $_POST['nombre'];
            $username = $_POST['email'];
            $password = $_POST['contraseña'];
            $repitPassword = $_POST['confirmarContraseña'];
            $tipo = "usuario";
            $user = $this->modelLogin->getAdmin($username);
            if ($user) {
                $this->viewPublic->formCheck("El usuario ya esta registrado");
            } else {
                if ($password != $repitPassword) {
                    $this->viewPublic->formCheck("Las contraseñas no coinciden");
                } else {
                    $passwordCifrado = password_hash($password, PASSWORD_DEFAULT);
                    $this->modelLogin->insert($nombre, $username, $passwordCifrado, $tipo);
                    if (session_status() != PHP_SESSION_ACTIVE) {
                        session_start(); //Abro la sesion
                    }
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['nombre_usuario'] = $nombre;  //Guardo el nombre del usuario
                    $_SESSION['TIPO'] = $tipo;
                    header('Location: ' . BASE_URL . 'home');
                }
            }
        }
    }

    //verifica que tipo de usuario es
    public function formCheckIn()
    {
        $this->viewPublic->formCheck();
    }

    //muestra todo los usuarios registrados
    public function showUsers()
    {
        $usuarios = $this->modelLogin->get();
        $tipos = $this->modelLogin->types();
        $this->view->showUsers($usuarios, $tipos);
    }

    //elimina un usuario
    public function deleteUser()
    {
        $this->modelLogin->delete($id_usuario);
        header('Location: ' . BASE_URL . 'listar_usuarios');
    }

    //modifica los datos de un usuario
    public function editUser()
    {
    }
}

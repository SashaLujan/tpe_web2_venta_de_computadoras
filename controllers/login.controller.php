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
                    $_SESSION['nombre_suario'] = $user->nombre; //guardo el nombre de usuario
                    header('Location: ' . BASE_URL . 'loguearse');
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
}

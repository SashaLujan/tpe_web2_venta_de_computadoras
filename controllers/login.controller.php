<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';

class LoginController{
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct()
    {
        $this->modelLogin = new AdminModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic =new PublicView();
    }

    //verifica que el usuario ingresado sea correcto
    public function loginAdmin(){
        $urlPag = explode('/', $_SERVER['HTTP_REFERER']);
        $accion = end($urlPag);
        if(empty($_POST['username'])|| empty($_POST['psw'])){
            $this->viewPublic->showHome(false, "Completar todos los campos");
        }
        else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $user = $this->modelLogin->getAdmin($username);
            if($user){
                if(password_verify($password,$user->contrasenia)){
                    session_start(); //abro la sesion
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['nombreUsuario'] = $user->nombre; //guardo el nombre de usuario
                    $this->viewAdmin->welcome($user->nombre);
                } else {
                    var_dump($accion);
                    die;
                    $this->viewPublic->showHome(false, "contraseña incorrecta");
                }
            }
            else{
                $this->viewPublic->showHome(false, "El usuario no exise");
            }
        }
    }
    
        //cierra la sesion que esta abierta y redirige al home
        public function logout(){
            session_start();
            session_destroy();
            header('Location: home');
        }
    }

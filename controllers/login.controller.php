<?php

require_once 'models/login.model.php';
require_once 'views/computer.view.php';
require_once 'views/mark.view.php';

class LoginController{

    //Variables globales del controlador
    private $modelLogin;
    private $view;
    
    public function __construct() { //Constructor de la clase
        
        $this->modelLogin = new AuthModel();
        $this->view = new AuthView();
    }

    //Controla que el usuario ingresado sea correcto
    public function loginAuth(){
        if(empty($_POST['username']) || empty($_POST['psw'])) {   
            
            echo "No ingreso todos los datos requeridos";
            
        } else {
            $username = $_POST['username'];
            $password = $_POST['psw'];
            $user = $this->modelLogin->getAuth($username);

            if($user) {
                if(password_verify($password, $user->contraseña)) {
                    session_start();                                    //Abro la sesion
                    $_SESSION['NOMBRE_USUARIO'] = $user->nombre;        //Guardo el nombre del usuario
                    $this->view->welcome($user->nombre); 
                } else {
                    echo "contraseña incorrecta";
                }
            } else {
                echo "el usuario no existe";
            }
        }
    }
    //cierra la sesion que se encuentra abierta y se dirige al home
    public function logout() {
        session_start();
        session_destroy();
        header('Location: home');
    }
}


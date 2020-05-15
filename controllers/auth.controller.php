<?php
require_once 'views/auth.view.php';
require_once 'models/auth.model.php';


class AuthController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new AuthView();
        $this->model = new AuthModel();
    }

    public function showLoguin()
    {
        $this->view->Verify();
    }

    public function verifyUser()
    {
        $usuario = $_POST['nombre_usuario'];
        $pass = $_POST['contrasenia'];
        $verificado = $this->model->VerUserRegistrado($usuario, $pass);
        if (!empty($verificado)) {
            echo 'solo puede acceder el administrador';
        } else {
            echo 'Usuario y/o contraseña no registrada';
        }
    }
}

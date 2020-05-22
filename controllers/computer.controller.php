<?php
require_once 'models/computer.model.php';
require_once 'models/mark.model.php';
require_once 'models/login.model.php';
require_once 'views/computer.view.php';
require_once 'views/mark.view.php';
require_once 'views/auth.view.php';

class AuthController
{
    private $modelComputer;
    private $modelMark;
    private $viewComputer;
    private $viewMark;
    private $viewAuth;

    public function __construct()
    {
        $this->modelComputer = new ComputerModel();
        $this->modelMark = new MarkModel();
        $this->viewComputer = new ComputerView();
        $this->viewMark = new MarkView();
        $this->viewAuth = new AuthView();
        $this->userLoggued();
    }

    public function showOption()
    {
        $this->viewAuth->chooseTask();
    }

    //muestra todas las computadoras
    public function computers()
    {
        //Pido los jugadores al modelo
        $computadora = $this->modelComputer->getAll();
        //Actualizo la vista
        $this->viewAuth->showComputer($computadora);
    }

    //muestra todas las marcas
    public function marks()
    {
        //pido las marcas al modelo
        $marca = $this->modelMark->getMarks();
        //actualizo la vista
        $this->viewAuth->marks($marca);
    }

    //muetra un formulario para agregar una computadora nueva
    public function formComputer()
    {
        $marca = $this->modelMark->getMarks();
        $this->viewAuth->formComputer($marca);
    }

    //guarda la nueva computadora cargada por el usuario
    public function addComputer()
    {
        if (empty($_POST['computadora']) || empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['id_marca_fk'])) {
            echo "Debe ingresar todos los datos obligatorios!";
        } else {
            $computadora = $this->modelComputer->getone($_POST['computadora']);
            if (!empty($computadora)) {
                echo "La computadora fue cargada correctamente";
            } else {
                $this->modelComputer->insert($_POST['computadora'], $_POST['nombre'], $_POST['sistOpertivo'], $_POST['id_marca_fk']);
                echo "La computadora fue guardada correctamente";
            }
        }
    }

    //muestra un formulario para agregar una marca nueva
    public function formMark()
    {
        $this->viewAuth->formMark();
    }

    //guarda una nueva marca en la BBDD
    public function addMark()
    {
        if (empty($_POST['marca']) || empty($_POST['id_marca']) || empty($_POST['nombre'])) {
            echo "Debe cargar todos los datos que son obligatorios";
        } else {
            $marca = $this->modelMark->getMark($_POST['marca']);
            if (!empty($marca)) {
                echo "La marca fue cargada correctamente";
            } else {
                $this->modelMark->insert($_POST['marca'], $_POST['id_marca'], $_POST['nombre']);
                echo "La marca fue guardada correctamente";
            }
        }
    }

    //muestra formulario para Editar una computadora
    public function editComputer()
    {
        if (!empty($_POST['computadora'])) {
            $computadora = $_POST['computadora'];
            $computadora = $this->modelComputer->getone($computadora);
            $this->viewAuth->editComputer($computadora);
        } else {
            echo "Debe ingresar una computadora correcta";
        }
    }

    //modifica los datos de una computadora
    public function modifyComputer()
    {
        if (empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['id_marca_fk'])) {
            $this->viewComputer->showError("Tiene que comppletar todos los campos obligatorios");
            die;
        }
        $this->modelComputer->update($_POST['marca'], $_POST['nombre'], $_POST['sistOperativo'], $_POST['id_marca_fk']);
    }

    public function deleteComputer()
    {

        $this->modelComputer->deleteComputer($_POST['computadora']);
    }

    //muestra formulario para Editar una Marca
    public function editMark($id_marca)
    {
        $marca = $this->modelMark->getMark($id_marca);
        $this->viewAuth->editMark($marca);
    }

    public function modifyMark()
    {
        if (empty($_POST['marca']) || empty($_POST['nombre'])) {
            $this->viewMark->showError("Tiene que completar todos los campos");
            die;
        }
        $this->modelMark->update($_POST['id_marca'], $_POST['marca'], $_POST['nombre']);
    }

    public function deleteMark($id_marca)
    {
        $this->modelMark->deleteMark($id_marca);
    }

    //verifica que haya un usuario logueado
    public function userLoggued()
    {
        session_start();
        if (!isset($_SESSION['NOMBRE_USUARIO'])) {
            header('Location: home');
            die();
        }
    }

    public function showError($msg)
    {

        //Le digo a la VISTA que me muestre el error en pantalla
        $this->viewAuth->showError($msg);
    }
}

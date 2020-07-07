<?php
require_once 'models/computers.model.php';
require_once 'models/marks.model.php';
require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';
require_once 'helpers/auth.helper.php';

class AdminController
{
    //variables globales
    private $modelComputers;
    private $modelMarks;
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct()
    {
        authHelper::checkLogged();
        $this->modelComputers = new ComputersModel();
        $this->modelMarks = new MarksModel();
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //muestra una form para poder cargar una computadora nueva
    public function formComputer()
    {
        $marcas = $this->modelMarks->getAll();
        $this->viewAdmin->formComputerAdd($marcas);
    }

    public function copyImage(){
        // Nombre archivo original
        $nombreOriginal = $_FILES['foto']['name'];
        // Nombre en el file system:
        $nombreFisico = $_FILES['foto']['tmp_name'];
        $nombreFinal = "imagenes/computadoras/". uniqid("", true) . "." . strtolower(pathinfo($nombreOriginal, PATHINFO_EXTENSION));
        move_uploaded_file($nombreFisico, $nombreFinal); 
        return $nombreFinal;
    }

    //guarda una nueva computadora
    public function addComputer()
    {
        if (empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['marca']) || empty($_POST['foto']['name'] == "")) {
           // $marcas = $this->modelMarks->getAll();
            $this->viewAdmin->showError("No ingreso todos los datos obligatorios");
        } else {
            if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png"){
                $imagen = $this->copyImage();
                $this->modelComputers->insert($_POST['nombre'], $_POST['sistOperativo'], $_POST['marca'], $imagen);
                //$marcas = $this->modelMarks->getAll();
                //$this->viewAdmin->formComputerAdd("La computadora fue guardada correctamente");
                header('Location: ' . BASE_URL . 'agregarComp');
            }
            else{
                $this->viewAdmin->showError("no ingreso un archivo de imagen correcto");
            }
        }
    }

    //muestra un formulario para editar la comp
    public function editComputer($id_computadora)
    {
        $computadora = $this->modelComputers->get($id_computadora);
        $marca = $this->modelMarks->getAll();
        $this->viewAdmin->showFormEditComputer($computadora, $marca);
    }

    //modificacion de computadora
    public function modifyComputer()
    {
        if (empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['marca']) || empty($_POST['foto'])) {
            $computadora = $this->modelComputers->get($_POST['nombre']);
            $marca = $this->modelMarks->getAll();
            $this->viewAdmin->showFormEditComputer($computadora, $marca, "completar todos los campos");
        }
        else{
            if(($_FILES['foto']['name'] == "")){
                $this->modelComputers->update($_POST['nombre'], $_POST['sistOperativo'], $_POST['marca'], $_POST['id_computadora'],  $_POST['foto']);
            }
            else{
                if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png"){
                    unlink($_POST['foto']);
                    $imagen = $this->copyImage();
                    $this->modelComputers->update($_POST['nombre'], $_POST['sistOperativo'], $_POST['marca'], $_POST['id_computadora'],  $imagen);
                }
                else{
                    $this->viewAdmin->showError("no ingreso un archivo de imagen correcto");
                }
            }
        }
    }

    public function deleteComputer($id_computadora)
    {
        $this->modelComputers->delete($id_computadora);
        header('Location: ' . BASE_URL . 'listaComp');
    }

    //muestra un formulario vacio para agregar una marca
    public function formMark()
    {
        $this->viewAdmin->formMarkAdd();
    }

    //guarda una nueva marca
    public function addMark()
    {
        if (empty($_POST['nombre'])) {
            $this->viewAdmin->showError("No completo los datos obligatorios");
        } else {
            $marca = $this->modelMarks->getName($_POST['nombre']);
            if (!empty($marca)) {
                $this->viewAdmin->showError("La marca ya existe");
            } else {
                $this->modelMarks->insert($_POST['nombre']);
                //$this->viewAdmin->formMarkAdd("La marca fue guardada correctamente");
                header('Location: ' . BASE_URL . 'agregarMarca');
            }
        }
    }

    //muestra formulario para editar
    public function editMark($id_marca)
    {
        $marca = $this->modelMarks->get($id_marca);
        $this->viewAdmin->showFormEditMark($marca);
    }

    public function modifyMark()
    {
        if (empty($_POST['nombre'])) {
            $marca = $this->modelMarks->getName($_POST['nombre']);
            $this->viewAdmin->showFormEditMark($marca, "completar todos los campos");
        }
        else{
            $this->modelMarks->update($_POST['nombre']);
            $marca = $this->modelMarks->getName($_POST['nombre']);
            $this->viewAdmin->showFormEditMark($marca, "los cambios se guardaron correctamente");
        }
    }

    public function deleteMark($id_marca)
    {
        $this->modelMarks->delete($id_marca);
        header('Location: ' . BASE_URL . 'listaMarca');
    }

    public function showError($msg)
    {
        $this->view->error($msg);
    }
}

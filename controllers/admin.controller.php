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

    public function addComputer()
    /*{
        $id_computadora= $_POST['idcomputadora'];
        $nombre= $_POST['nombre'];         
        $sistOperativo = $_POST['sistOperativo'];          //Compruebo que no se suban autores existentes       
        $marca = $_POST['marca'];
        $id_marca_fk= $_POST['idmarca'];
        $computadoras= $this->modelComputers->getAll();         
        foreach ($computadoras as $computadora){             
            if ($computadora->nombre == $nombre){                 
                $this->viewAdmin->showError("la computadora ya existe");                
                die();             
            }        
        }         
        if (!empty($id_computadora)&& !empty($nombre)&& !empty($sistOperativo)&& !empty($marca)&&!empty($id_marca_fk)){          
            $this->modelComputers->insert($id_computadora, $nombre, $sistOperativo, $marca, $id_marca_fk);             
            $this->viewAdmin->formComputerAdd($nombre);
        }
        else {             
            $this->viewAdmin->showError("Faltan campos por completar para crear nuevo autor");         
        }
    }*/
    {
        if (empty($_POST['id_computadora']) || empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['marca'] || empty($_POST['id_marca_fk']) )) {
            $marcas = $this->modelMarks->getAll();
            $this->viewAdmin->formComputerAdd($marcas, "No ingreso todos los datos obligatorios");
        } else {
            $computadora = $this->modelComputers->get($_POST['nombre']);
            if (!empty($computadora)) {
                $marcas = $this->modelMarks->getAll();
                $this->viewAdmin->formComputerAdd($marcas, "La computadora" . $_POST['nombre'] . "ya existe");
            } else {
                $this->modelComputers->insert($_POST['id_computadora'], $_POST['nombre'], $_POST['sistOperativo'], $_POST['marca'], $_POST['id_marca_fk']);
                $marcas = $this->modelMarks->getAll();
                $this->viewAdmin->formComputerAdd($marcas, "La computadora fue guardada correctamente");
            }
        }
    }

    //muestra un formulario vacio para agregar una marca
    public function formMark()
    {
        $this->viewAdmin->formMarkAdd();
    }

    //guarda una nueva marca
    public function addMark()
    {
        if (empty($_POST['marca']) || empty($_POST['nombre'])) {
            $this->viewAdmin->formMarkAdd("No completo los datos obligatorios");
        } else {
            $marca = $this->modelMarks->get($_POST['marca']);
            if (!empty($marca)) {
                $this->viewAdmin->formMarkAdd("La marca ya existe");
            } else {
                $this->modelMarks->insert($_POST['marca'], $_POST['nombre']);
                $this->viewAdmin->formMarkAdd("La marca fue guardada correctamente");
                header('Location: ' . BASE_URL . 'agregarMarca');
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
        if (empty($_POST['computadora']) || empty($_POST['nombre']) || empty($_POST['sistOperativo']) || empty($_POST['marca'])) {
            $computadora = $this->modelComputers->get($_POST['computadora']);
            $marca = $this->modelMarks->getAll();
            $this->viewAdmin->showFormEditComputer($computadora, $marca);
        }
        $this->modelComputers->update($_POST['computadora'], $_POST['nombre'], $_POST['sistOperativo'], $_POST['marca'], $_POST['imagen']);
    }

    public function deleteComputer($id_computadora)
    {
        $this->modelComputers->delete($id_computadora);
        header('Location: ' . BASE_URL . 'listaComp');
    }

    //muestra formulario para editar
    public function editMark($id_marca)
    {
        $marca = $this->modelMarks->get($id_marca);
        $this->viewAdmin->showFormEditMark($marca);
    }

    public function modifyMark()
    {
        if (empty($_POST['marca']) || empty($_POST['nombre'])) {
            $marca = $this->modelMarks->get($_POST['marca']);
            $this->viewAdmin->showFormEditMark($marca);
        }
        $this->modelMarks->update($_POST['marca'], $_POST['nombre']);
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

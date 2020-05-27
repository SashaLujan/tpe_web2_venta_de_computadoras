<?php
require_once 'models/computers.model.php';
require_once 'models/marks.model.php';
require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';
require_once 'helpers/auth.helper.php';

class AdminController{
    //variables globales
    private $modelComputers;
    private $modelMarks;
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct(){
        authHelper::checkLogged();
        $this->modelComputers = new ComputersModel();
        $this->modelMarks = new MarksModel();
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //le muestra un form al admin si quiere hacer un ABM en computadoras o marcas
    public function showOption(){
        $this->viewAdmin->chooseTask();
    }

    //muestra las computadoras para poder hacer ABM
    public function computers(){
        //pido las computadoras al modelo
        $computadoras = $this->modelComputers->getAll();
        //actualizo la vista
        $this->viewAdmin->showComputers($computadoras);
    }

    //muetra las marcas para poder hacer ABM
    public function marks(){
        //pido las marcas al modelo
        $marcas = $this->modelDivisiones->getAll();
        //actualizo la vista
        $this->viewAdmin->showMarks($marcas);
    }

    //muestra una form para poder cargar una compu nueva
    public function formComputer(){
        $marcas = $this->modelMarks->getAll();
        $this->viewAdmin->formComputerAdd($marcas);
    }

    public function addComputer(){
        if(empty($_POST['computadora']) || empty($_POST['name']) || empty($_POST['sistOperativo'])|| empty($_POST['marca'])){
            $marcas = $this->modelMarks->getAll();
            $this->viewAdmin->formComputerAdd($marcas, "No ingreso todos los datos obligatorios");
        }
        else {
            $computadora = $this->modelComputers->get($_POST['computadora']);
            if(!empty($computadora)){
                $marcas = $this->modelMarks->getAll();
                $this->viewAdmin->formComputerAdd($marcas, "La computadora". $_POST['name'] . "ya existe");
            } else {
                $this->modelComputers->insert($_POST['computadora'], $_POST['name'], $_POST['sistOperativo'], $_POST['marca'], $_POST['imagen']);
                $marcas = $this->modelMarks->getAll();
                $this->viewAdmin->formComputerAdd($marcas, "La computadora fue guardada correctamente");
                header('Location: ' .BASE_URL. 'agregarComputadora');
            }
        }
    }

    //muestra un formulario vacio para agregar una marca
    public function formMark(){
        $this->viewAdmin->formMarkAdd();
    }

    //guarda una nueva marca
    public function addMark(){
        if(empty($_POST['marca']) || empty($_POST['name'])){
            $this->viewAdmin->formMarkAdd("No completo los datos obligatorios");
        } 
        else {
            $marca = $this->modelMarks->get($_POST['marca']);
            if(!empty($marca)){
                $this->viewAdmin->formMarkAdd("La marca ya existe");
            } else{
                $this->modelMarks->insert($_POST['marca'], $_POST['name']);
                $this->viewAdmin->formMarkAdd("La marca fue guardada correctamente");
                header('Location: ' .BASE_URL. 'agregarMarca');
            }
        }
    }

    //muestra un formulario para editar la comp
    public function editComputer($id_computadora){
        $computadora = $this->modelComputers->get($id_computadora);
        $marca = $this->modelMarks->getAll();
        $this->viewAdmin->showFormEditComputer($computadora, $marca);
    }

    //modificacion de computadora
    public function modifyComputer(){
        if(empty($_POST['computadora']) || empty($_POST['name']) || empty($_POST['sistOperativo'])|| empty($_POST['marca'])){
            $computadora = $this->modelComputers->get($_POST['computadora']);
            $marca = $this->modelMarks->getAll();
            $this->viewAdmin->showFormEditComputer($computadora, $marca);
        }
        $this->modelComputers->update($_POST['computadora'], $_POST['name'], $_POST['sistOperativo'], $_POST['marca'], $_POST['imagen']);
    }

    public function deleteComputer($id_computadora){
        $this->modelComputers->delete($id_computadora);
    }

    //muestra formulario para editar
    public function editMark($id_marca){
        $marca = $this->modelMarks->get($id_marca);
        $this->viewAdmin->showFormEditMark($marca);
    }

    public function modifyMark(){
        if(empty($_POST['marca']) || empty($_POST['name'])){
            $marca = $this->modelMarks->get($_POST['marca']);
            $this->viewAdmin->showFormEditMark($marca);
        }
        $this->modelMarks->update($_POST['marca'], $_POST['name']);
    }

    public function deleteMark($id_marca){
        $this->modelMarks->delete($id_marca);
    }

    public function showError($msg){
        $this->view->error($msg);
    }
}

<?php
require_once 'herlpers/auth.helper.php';
require_once 'models/comentarios.model.php';
require_once 'models/computers.model.php';
require_once 'api/api.view.php';

class CommentsApiController
{
    private $model;
    private $view;
    private $data;
    private $modelComputers;

    public function __construct()
    {
        $this->model = new ComentariosModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");  //Lee el input ingresado
        $this->modelComputers = new ComputersModel;
    }

    public function getComments($params)
    {
        $id_computadora = $params[':ID'];   //Obtengo el id de una computadora del arreglo asociativo $params
        $id_computadora = $this->modelComputers->get($id_computadora);
        $comentarios = $this->model->getAll($id_computadora);
        if (!empty($comentarios)) {
            $this->view->response($comentarios, 200);
        } else {
            $this->view->response("No hay comentarios sobre esta computadora", 404);
        }
    }

    //funcion para eliminar un comentario
    public function deleteComment($params = [])
    {
        $id_comentario = $params[':ID'];
        $comentario = $this->model->get($id_comentario);
        if (!empty($comentario)) {
            $this->model->delete($id_comentario);
            $this->view->response("El comentario se elimino", 200);
        } else {
            $this->view->response("El comentario no existe ", 404);
        }
    }

    public function getData()
    {
        return json_decode($this->data);
    }

    //funcion para comentar
    public function addComment($params = [])
    {
        //Devuelve el objeto JSON enviado por POST ($body es un objeto JSON)
        $body = $this->getData();

        $comentario = $body->comentario;
        $usuario = $body->usuario;
        $fecha = $body->fecha;
        $puntaje = $body->puntaje;
        $id_computadora =$params[':ID'];
        $id_comentario = $this->model->insert($comentario, $usuario, $fecha, $puntaje, $id_computadora);

        if ($id_comentario) {
            $this->view->response("Se agrego el comentario", 200);
        } else {
            $this->view->response("El comentario no se pudo agregar", 500);
        }
    }
}

<?php

class ComentariosModel
{
    private function createConection()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'computadora';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    //ingresa un nuevo comentario a la BBDD
    public function insert($comentario, $usuario, $fecha, $puntaje, $id_computadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO comentarios(comentario, usuario, fecha, puntaje, id_computadora) VALUES(?, ?, ?, ?, ?)"); // prepara la consulta
        return $sentencia->execute([$comentario, $usuario, $fecha, $puntaje, $id_computadora]); // ejecuta
    }

    public function delete($id_comentario)
    {

        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM comentarios WHERE id_comentarios = ?"); // prepara la consulta
        $sentencia->execute([$id_comentario]); // ejecuta 
        return $sentencia;
    }

    //devuelve todos los comentarios de una computadora 
    public function getAll($id_computadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM comentarios WHERE id_computadora = ? ORDER BY id_comentario DESC"); // prepara la consulta
        $sentencia->execute([$id_computadora]); // ejecuta
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $comentarios;
    }

    //obtengo un comentario
    public function get($id_comentario){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM comentarios WHERE id_comentario = ?"); // prepara la consulta
        $sentencia->execute([$id_comentario]); // ejecuta
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $comentario;
    }
}

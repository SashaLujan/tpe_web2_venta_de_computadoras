<?php

class MarkModel
{
    private function createConection()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'computadora';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        return $pdo;
    }

    public function getMarks()
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM marca"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    //inserta una marca nueva
    public function InsertOneMark($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO marca(nombre) VALUES(?)"); // prepara la consulta
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function getMark($idmarca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM marca WHERE id_marca=?"); // prepara la consulta
        $sentencia->execute([$idmarca]); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $marca;
    }

    public function modifyMark($idmarca, $nombre)
    {

        // 1. abro la conexión con MySQL 
        $db = $this->createConection();

        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE marca SET nombre=? WHERE id_marca=?"); // prepara la consulta
        $sentencia->execute([$nombre, $idmarca]); // ejecuta
    }

    public function borrarMark($idmarca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM marca  WHERE id_marca = ?"); // prepara la consulta
        $sentencia->execute([$idmarca]); // ejecuta 
        return $sentencia;
    }
}

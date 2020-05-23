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

    //obtengo todas las marcas
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
    public function insert($marca,$id_marca,$nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO marca(id_marca, nombre) VALUES(?)"); // prepara la consulta
        return $sentencia->execute([$marca,$id_marca,$nombre]); // ejecuta
    }

    //obtengo una marca especifica
    public function getMark($id_marca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM marca WHERE id_marca=?"); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $marca;
    }

    public function update($id_marca,$marca,$nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE marca SET nombre=? WHERE id_marca=?"); // prepara la consulta
        $sentencia->execute([$id_marca,$marca,$nombre]); // ejecuta
    }

    public function deleteMark($id_marca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM marca  WHERE id_marca = ?"); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta 
        return $sentencia;
    }
}

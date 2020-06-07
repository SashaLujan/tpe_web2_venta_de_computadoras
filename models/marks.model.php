<?php

class MarksModel
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

    //devuelve todas las marcas
    public function getAll()
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM marca"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    //muestra la marca que el usuario paso por parametro
    public function get($id_marca)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM marca  WHERE id_marca=?"); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    public function getName($name)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM marca WHERE nombre_marca=?"); // prepara la consulta
        $sentencia->execute([$name]); // ejecuta
        $marca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    public function insert($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO marca(nombre_marca) VALUES(?)"); // prepara la consulta        
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function update($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE marca SET nombre_marca=? WHERE id_marca=?"); // prepara la consulta
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function delete($id_marca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM marca  WHERE id_marca = ?"); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta 
        return $sentencia;
    }
}

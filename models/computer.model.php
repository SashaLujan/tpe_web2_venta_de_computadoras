<?php
//Interactua con la tabla computadora
class ComputerModel
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

    //devuelve todas las computadoras
    public function getAll()
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM computadora"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    public function getComputersByMark($marca)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT computadora.id_computadora, computadora.nombre, computadora.marca,
        computadora.sistOperativo,marca.id_marca, marca.nombre as marca
        FROM computadora INNER JOIN marca ON marca.id_marca=computadora.id_marca 
        WHERE marca.id_marca=? ORDER BY computadora.nombre ASC "); // prepara la consulta
        $sentencia->execute([$marca]); // ejecuta --> LLEGA BIEN SIN FILTRAR POR MARCA
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    public function getone($id)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT computadora.id_computadora, computadora.nombre, computadora.marca,
        computadora.sistOperativo,marca.id_marca, marca.nombre as marca
        FROM computadora INNER JOIN marca ON marca.id_marca=computadora.id_marca
        WHERE computadora.id_computadora=? ORDER BY computadora.nombre ASC "); // prepara la consulta
        $sentencia->execute([$id]); // ejecuta
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    public function InsertOneComputer($nombre, $marca, $sistOperativo, $id_marca)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO computadora(nombre, marca, sistOperativo, id_marca) VALUES(?, ?, ?, ?)"); // prepara la consulta
        return $sentencia->execute([$nombre, $marca, $sistOperativo, $id_marca]); // ejecuta
    }

    public function borrarComputadora($idcomputadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM computadora WHERE id_computadora = ?"); // prepara la consulta
        $sentencia->execute([$idcomputadora]); // ejecuta 
        return $sentencia;
    }
}

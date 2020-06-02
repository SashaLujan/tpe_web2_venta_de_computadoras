<?php
class ComputersModel
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

    //muestra una sola computadora
    public function get($id_computadora)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM computadora  WHERE id_computadora=?"); // prepara la consulta
        $sentencia->execute([$id_computadora]); // ejecuta
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    //computadoraas de un tipo de marca
    public function getComputerMarks($id_marca)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT computadora, id_computadora, nombre, marca, sistOperativo
        FROM computadora 
        INNER JOIN marca ON computadora.id_marca = marca.id_marca
        WHERE marca.id_marca=$id_marca ORDER BY computadora"); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta --> LLEGA BIEN SIN FILTRAR POR MARCA
        $computadorapormarca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadorapormarca;
    }

    public function insert($id_computadora, $nombre, $sistOperativo, $id_marca_fk)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO computadora(id_computadora, nombre, marca, sistOperativo, id_marca_fk) VALUES(?, ?, ?, ?, ?)"); // prepara la consulta
        return $sentencia->execute([$id_computadora, $nombre, $sistOperativo, $id_marca_fk]); // ejecuta
    }

    public function update($id_computadora, $nombre, $sistOperativo, $id_marca_fk)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE computadora SET  nombre=? , marca=? , sistOperativo=? , id_marca_fk=? WHERE id_computadora=?"); // prepara la consulta
        $sentencia->execute([$nombre, $id_computadora, $sistOperativo, $id_marca_fk]); // ejecuta
    }

    public function delete($id_computadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM computadora WHERE id_computadora = ?"); // prepara la consulta
        $sentencia->execute([$id_computadora]); // ejecuta 
        return $sentencia;
    }
}

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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

    //muestra las computadoras de una marca     ----------PREGUNTAR--------
    public function getComputerByMarks($marca)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM computadora  WHERE nombre_marca=?"); // prepara la consulta
        $sentencia->execute([$marca]); // ejecuta
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    //hace la consulta para que me muestre los datos de una computadora y trae de la tabla marca el nombre de la marca
    public function getComputerMarks()
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT computadora.id_computadora, computadora.nombre_comp, computadora.imagen, computadora.sistOperativo, marca.nombre_marca
        FROM computadora 
        INNER JOIN marca ON computadora.id_marca_fk = marca.id_marca 
        WHERE computadora.id_computadora"); // prepara la consulta
        $sentencia->execute(); // ejecuta --> LLEGA BIEN SIN FILTRAR POR MARCA
        $computadorapormarca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadorapormarca;
    }

    //inserta una nueva computadora
    public function insert($nombre, $sistOperativo, $marca, $foto)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO computadora(nombre_comp, sistOperativo, imagen, id_marca_fk) VALUES(?, ?, ?, ?)"); // prepara la consulta
        return $sentencia->execute([$nombre, $sistOperativo, $marca, $foto]); // ejecuta
    }

    //actualiza los datos de la computadora
    public function update($nombre, $sistOperativo,$marca,$foto, $id_computadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE computadora SET  nombre_comp=? , sistOperativo=? , imagen=? , nombre_marca=? 
        WHERE id_computadora=?"); // prepara la consulta
        return $sentencia->execute([$nombre, $sistOperativo, $marca, $foto, $id_computadora]); // ejecuta
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

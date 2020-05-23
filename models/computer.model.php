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

    //computadoraas de un tipo de marca
    public function getComputersMark($id_marca)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT computadora, id_computadora, nombre, marca, sistOperativo,marca.id_marca, marca.nombre as marca
        FROM computadora INNER JOIN marca ON marca.id_marca=computadora.id_marca 
        WHERE marca.id_marca=? ORDER BY computadora.nombre ASC "); // prepara la consulta
        $sentencia->execute([$id_marca]); // ejecuta --> LLEGA BIEN SIN FILTRAR POR MARCA
        $computadorapormarca = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadorapormarca;
    }

    public function getone($id)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM computadora  WHERE id_computadora=?"); // prepara la consulta
        $sentencia->execute([$id]); // ejecuta
        $computadora = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $computadora;
    }

    public function insert($computadora, $nombre, $sistOperativo, $id_marca_fk)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO computadora(id_computadora, nombre, marca, sistOperativo, id_marca_fk) VALUES(?, ?, ?, ?, ?)"); // prepara la consulta
        return $sentencia->execute([$computadora, $nombre, $sistOperativo, $id_marca_fk]); // ejecuta
    }

    public function update($marca, $nombre, $sistOperativo, $id_marca_fk)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();

        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE computadora SET  nombre=? , marca=? , sistOperativo=? , id_marca_fk=? WHERE id_computadora=?"); // prepara la consulta
        $sentencia->execute([$nombre, $marca, $sistOperativo, $id_marca_fk]); // ejecuta
    }


    public function deleteComputer($id_computadora)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM computadora WHERE id_computadora = ?"); // prepara la consulta
        $sentencia->execute([$id_computadora]); // ejecuta 
        return $sentencia;
    }
}

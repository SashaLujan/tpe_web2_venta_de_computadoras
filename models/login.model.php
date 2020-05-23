<?php

class AdminModel{

    private function createConection()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'computadora';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        return $pdo;
    }

    //devuelve el admin si existe en la DDBB o vacio si no existe
    public function getAuth($username) {
        //Me conecto con la DDBB
        $db = $this->createConection();
        //Hacemos la consulta
        $sentencia = $db->prepare("SELECT * FROM administradores WHERE nombre_usuario = ?");    //Preparo la sentencia sql para hacer la consulta
        $sentencia->execute([$username]); // ejecuta
    $administrador = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
    return $administrador;
    }
    
}
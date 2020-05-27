<?php
class LoginModel{
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
    public function getAdmin($username)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM administradores WHERE nombre_usuario = ?"); // prepara la consulta
        $sentencia->execute([$username]); // ejecuta
        $administrador = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $administrador;
    }
}
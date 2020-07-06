<?php
class LoginModel
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
    public function getAdmin($username)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?"); // prepara la consulta
        $sentencia->execute([$username]); // ejecuta
        $administrador = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $administrador;
    }

    //ingresa un usuario nuevo
    public function insert($nombre, $nombre_usuario, $contraseña, $tipo){
        // 1. abro la conexión con MySQL
        $db = $this->createConection();
         // 2. enviamos la consulta (3 pasos)
         $sentencia = $db->prepare("INSERT INTO usuarios (nombre, nombre_usuario, contraseña, tipo) VALUES (?, ?, ?, ?)"); // prepara la consulta
         return $sentencia->execute([$nombre, $nombre_usuario, $contraseña, $tipo]);
    }

    //devuelve todos los de usuarios y admin que hay registrados
    public function get(){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM usuarios"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $usuarios;
    }

    //devuelve los tipos de usuarios
    public function types(){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT DISTINCT tipo FROM usuarios"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $tipos = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $tipos;
    }

    public function delete ($id_usuario){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("DELETE FROM usuarios WHERE id_usuario = ?"); // prepara la consulta
        $sentencia->execute([$id_usuario]); // ejecuta
    }

    //devuelve un usuario pasado por parametro
    public function getId($id_usuario){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM usuarios WHERE id_usuario = ?"); // prepara la consulta
        $sentencia->execute([$id_usuario]); // ejecuta
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $usuario;
    }

    public function update($id_usuario, $tipo){
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE usuarios SET tipo = ? WHERE id_usuario = $id_usuario"); // prepara la consulta
        $sentencia->execute([$tipo]); // ejecuta
    }
}

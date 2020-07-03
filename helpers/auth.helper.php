<?php

class AuthHelper
{

    //verifica que haya un usuario logueado
    static public function userLogged()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }

    //verifica que haya un usuario logueado y si lo hay devuelve su nombre
    static public function nameLogged()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['IS_LOGGED'])) {
            return $_SESSION['nombre_usuario'];
        }
        return null;
    }

    //verifica que haya algun usuario logueado y si no hay ninguno te manda al home
    static public function checkLogged()
    {
        session_start();
        if (!isset($_SESSION['nombre_usuario']) || $_SESSION['TIPO'] != "administrador") {
            header('Location: ' . BASE_URL . 'home');
            die();
        } else {
            return $_SESSION['nombre_usuario'];
        }
    }

    //verifica que haya un usuario logueado y devuelve que tipo de usuario es
    static public function typeLogged() {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        } 
        if (isset($_SESSION['TIPO'])) {
            return $_SESSION['TIPO'];
        } else {
            return null;
        }
    }
}

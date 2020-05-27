<?php

class AuthHelper {

    //verifica que haya un usuario logueado
    static public function userLogged() {
        session_start();
        if(isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }

    static public function checkLogged() {
        session_start(); 
        if (!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . 'home');
            die();
        }
    }
}
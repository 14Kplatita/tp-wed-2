<?php

    class ayuda{

        public function __construct() {   
        }

        public static function setUser($elusuario){
            session_start();
            $_SESSION['ID'] = $elusuario['id'];
            $_SESSION[':usuario_usuario'] = $elusuario[':usuario_usuario'];
        }

        
        public function logout() {
            session_start();
            session_unset();
            session_destroy();
        }

        public function checkLoggedIn() {
            session_start();
            if (isset($_SESSION['loggueado']) && $_SESSION['loggueado'] == true){
                return true;
            }else{
                return false;
            }      
        }
    }
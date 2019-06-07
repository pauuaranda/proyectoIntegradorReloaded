<?php
    class SessionCookie{
        static public function sessionStart(){
            if(!isset($_SESSION)){
                session_start();
            }
        }
        static public function setUser($user){
            $_SESSION["nombre"]=$user["nombre"];
            $_SESSION["apellido"]=$user["apellido"];
            $_SESSION["email"]=$user["email"];
            $_SESSION["avatar"]=$user["avatar"];
            $_SESSION["perfil"]=$user["perfil"];
            
        }
<<<<<<< HEAD
        static public function setCookie($user,$dato){
=======
        /*static public function setCookie($user,$dato){
            if (isset($dato)) {
>>>>>>> cambiosPau
                if($dato!=null){
                setcookie("email",$user["email"],time()+3600);
                setcookie("perfil",$user["perfil"],time()+3600);
                setcookie("avatar",$user["avatar"],time()+3600);
<<<<<<< HEAD
                setCookie("perfil",$usuario["perfil"],time()+3600);
                }    
        }
        static public function validarUser(){
             if (isset($_SESSION["email"])) {
                return true;
             }elseif (isset($_COOKIE["email"])) {
                $_SESSION["email"]=$_COOKIE["email"];
                return true;
             }else {
=======
               // setCookie("perfil",$usuario["perfil"],time()+3600);
                }
            }    
        }*/
        static public function validarUser(){
             if (isset($_SESSION["email"])) {
                return true;
            }elseif (isset($_COOKIE["email"])) {
                $_SESSION["email"]=$_COOKIE["email"];
                return true;
            }else {
>>>>>>> cambiosPau
                return false;
            }
        }
    }
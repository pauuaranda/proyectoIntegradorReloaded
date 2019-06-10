<?php
    class SessionCookie{
        static public function sessionStart(){
            if(!isset($_SESSION)){
                session_start();
            }
        }
        static public function setUser($user){
            $_SESSION["nombre"]=$user["first_name"];
            $_SESSION["apellido"]=$user["last_name"];
            $_SESSION["email"]=$user["email"];
            $_SESSION["avatar"]=$user["avatar"];
            $_SESSION["perfil"]=$user["profile"];
            
        }
        static public function setCookie($user,$dato){
                if($dato!=null){
                setcookie("email",$user["email"],time()+3600);
                setcookie("perfil",$user["profile"],time()+3600);
                setcookie("avatar",$user["avatar"],time()+3600);
                }    
        }
        static public function validarUser(){
             if (isset($_SESSION["email"])) {
                return true;
             }elseif (isset($_COOKIE["email"])) {
                $_SESSION["email"]=$_COOKIE["email"];
                return true;
             }else {
                return false;
            }
        }
    }
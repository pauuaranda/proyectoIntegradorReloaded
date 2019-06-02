<?php
    require_once("helpers.php");
    require_once("clases/Usuario.php");
    require_once("clases/Validador.php");
    require_once("clases/ArmarUsuario.php");
    require_once("clases/BaseDeDatos.php");
    //require_once("clases/BaseJSON.php");
    require_once("clases/BaseDatosMysql.php");
    require_once("clases/Buscador.php");
    require_once("clases/SessionCookie.php");
    require_once("clases/OlvidePassword.php");
    require_once("clases/Query.php");


    $validar = new Validador();
    $newUser = new ArmarUsuario();
   // $json = new BaseJSON("usuarios.json");
    $session = new SessionCookie();
    $host="localhost";
   // $dsn="127.0.0.1";
    $db="blackeye";
    $user="ferrer";
    $pass="123456";
    $puerto="3306";
    $charset = "utf8mb4";
    $pdo=BaseDatosMysql::conexion($host,$db,$user,$pass,$puerto,$charset);
    SessionCookie::sessionStart();
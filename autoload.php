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

    $host="localhost";
    // $dsn="127.0.0.1";
     $db="Blackeye";
     $user="blackeye";
     $pass="egpcfa2621";
     $puerto="3307";
     $charset = "utf8mb4";
     $pdo=BaseDatosMysql::conexion($host,$db,$user,$pass,$puerto,$charset);
    $validar = new Validador();
    $newUser = new ArmarUsuario();
   // $json = new BaseJSON("usuarios.json");
    $session = new SessionCookie();
    SessionCookie::sessionStart();
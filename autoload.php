<?php
    require_once("helpers.php");
    require_once("clases/Usuario.php");
    require_once("clases/Validador.php");
    require_once("clases/ArmarUsuario.php");
    require_once("clases/BaseDeDatos.php");
    require_once("clases/BaseJSON.php");
    require_once("clases/Buscador.php");
    require_once("clases/SessionCookie.php");
    require_once("clases/OlvidePassword.php");



    $validar = new Validador();
    $newUser = new ArmarUsuario();
    $json = new BaseJSON("usuarios.json");
    $session = new SessionCookie();
    SessionCookie::sessionStart();
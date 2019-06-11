<?php
    session_start();
    session_destroy();
    setcookie("perfil","",time()-1);
    setcookie("email","",time()-1);
    setcookie("avatar","",time()-1);
    header("location: login.php");
?>
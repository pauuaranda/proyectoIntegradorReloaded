<?php 
require_once("autoload.php");

if (isset($_GET["id"])) {
    $id_usuario=$_GET["id"];
    $user=Query::modificarUser($pdo,'Users',$id_usuario);
  }
  
  if (isset($_POST["si"])) {
        Query::borrarUser($pdo,'Users',$id_usuario);
        redirect("administrar.php");
      }
     elseif (isset($_POST["no"])){
        redirect("adminUsers.php");
    }
?>  
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eliminar-usuario</title>
    <link rel="stylesheet" href="css/meadm.css">
  </head>
  <body>
<div class="container">
    <form class="" action="" method="post">
    <h2>Esta seguro que quieres eliminar este usuario?</h2>
    <p>User:   <?= $user["first_name"]."   ".$user["last_name"]?> <br>
       Email:  <?=$user["email"]?> </p>
      <input type="submit" name="si" value="si" class="btn">
      <input type="submit" name="no" value="no" class="btn">
      <input type="hidden" name="id" value="<?=$id_usuario;?>">
   </form>
</div>
  </body>
 </html>
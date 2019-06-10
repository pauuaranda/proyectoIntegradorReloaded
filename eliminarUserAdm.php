<?php 
require_once("autoload.php");
if (isset($_GET["id"])) {
    $id_usuario=$_GET["id"];
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
  </head>
  <body>
<div class="container">
    <form class="" action="" method="post">
    <p>Esta seguro que quieres eliminar este usuario?</p>
      <input type="submit" name="si" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?=$id_usuario;?>">
   </form>
</div>
  </body>
 </html>
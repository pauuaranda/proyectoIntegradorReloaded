<?php 
require_once("autoload.php");
if (isset($_GET["id"])) {
    $id_usuario=$_GET["id"];
    $modificarUser =  Query::modificarUser($pdo,'Users',$id_usuario);
  }
  
  if ($_POST) {
    foreach ($_POST as $key => $value) {
            $sql="update Users set $key='$value' where Users.id=:id";
            $query=$pdo->prepare($sql);
            $query->bindValue(':id',$_POST['id']);
            $query->execute(); 
          }redirect("administrar.php");
    } 
?>  
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modificación del usuario</title>
    <link rel="stylesheet" href="css/meadm.css">
  </head>
  <body>
<div class="container">
<h2>Modificar Usuario</h2>
<hr>
    <form class="" action="" method="post">
        <h3>USER :     <?= $modificarUser ["first_name"];?></h3>
        <br>
        <?php foreach ($modificarUser as $key => $value) : ?>
            <label><?= $key?> :</label>
            <?php if($key =="id"){?>
                <input type="text" disabled name="<?= $key?>" value="<?= $value?> " class="inp">
            <?php }else{?>
                <input type="text" name="<?= $key?>" value="<?= $value?>" class="inp"> 
            <?php }?>
            <br>
      <?php endforeach;?>
    <br>
    <p>Esta seguro que quieres modificar este usuario?</p>
      <input type="submit" class="btn">
      <a href="adminUsers.php" class="btn2">Cancelar</a>
      
      <input type="hidden" name="id" value="<?=$id_usuario;?>">
   </form>
</div>
  </body>
 </html>

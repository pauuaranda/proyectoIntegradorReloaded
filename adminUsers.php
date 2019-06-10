<?php
 include_once("autoload.php");
 $listado=Query::listar($pdo,'Users');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Administrar Usuarios::</title>
    <link rel="stylesheet" href="css/admuser.css">
</head>
<body>
    <div class="container">
    <div class="logo">
              <a href="index.php">
                <img src="img/logo.svg" alt="">
              </a>  
            </div>
        <section>
                <h1>ADMINISTRAR USUARIOS</h1>
                <hr>
         <div class="">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Usuarios</th>
              <th scope="col">Modificar</th>
              <th scope="col">Borrar</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($listado as $key => $value):?>
                <tr>
                  <th scope="row"><?= $value["id"] ?></th>
                  <td><?="nombre:  ".$value["first_name"]."         -        "."apellido:  ".$value["last_name"]."         -        "."email:  ".$value["email"]."         -        "."profile:  ".$value["profile"];?></td>
                  <td><a href="modificarUserAdm.php?id=<?=$value['id'];?>">
                        Modificar
                      </a>
                  </td>
                  <td><a href="eliminarUserAdm.php?id=<?=$value['id'];?>">
                        Eliminar
                      </a>
                  </td>
                </tr>
                  <?php endforeach;?>
              </tbody>
              
          </div>
    </div>
   </section>
            
        
    </div>
</body>
</html>
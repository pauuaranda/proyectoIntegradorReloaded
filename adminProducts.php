<?php
 include_once("autoload.php");
 $listado=Query::listar($pdo,'Products');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Administrar Productos::/title>
    <link rel="stylesheet" href="css/admuser.css">
</head>
<body>
    <div class="container">
        <section>
                <h1>ADMINISTRAR PRODUCTOS</h1>
                <hr>
         <div class="">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Productos</th>
              <th scope="col">Agregar</th>
              <th scope="col">Modificar</th>
              <th scope="col">Borrar</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($listado as $key => $value):?>
                <tr>

                  <th scope="row"><?= $value["id"] ?></th>
                  <td><?="nombre:  ".$value["first_name"]."         -        "."email:  ".$value["email"]."         -        "."profile:  ".$value["profile"];?></td>
                  <td><a href="agregarProductoAdmin.php?id=<?=$value['id'];?>">
                        <a href="">agregar</a>
                      </a>
                  </td>
                  <td><a href="modificarProductoAdmin.php?id=<?=$value['id'];?>">
                        <a href="">modificar</a>
                      </a>
                  </td>
                  <td><a href="eliminarProductoAdmin.php?id=<?=$value['id'];?>">
                        <a href="">eliminar</a>
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
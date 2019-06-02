<?php
include_once("autoload.php");
if($_POST){
  $usuario= new Usuario($_POST["email"],$_POST["pass"],$_POST["nombre"],$_POST["apellido"]);
  $errores = $validar->validarUsuario($usuario, $_POST["repass"]);
  if(count($errores)==0){
    $user = Query::buscarEmail($usuario->getEmail(),$pdo,'users');
    if($user==null){
      $errores["email"]="El email esta en uso.";
    }else{
        $userNuevo=$newUser->armarUser($usuario);
         BaseDatosMsql::guardar($pdo,$userNuevo,'users');
         redirect ("login.php");
    }
  }
}





/*include_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["pass"],$_POST["nombre"],$_POST["apellido"]);
  $errores = $validar -> validarUsuario($usuario,$_POST["repass"]);
  if (count($errores)== 0){
    $verJson = $json-> leer();
    $user = Buscador::buscarEmail($usuario->getEmail(),$verJson);
    if($user!=null){
      $errores["email"] = "este email ya esta registrado";
    }else{
      $userNuevo = $newUser -> armarUser($usuario);
      $json-> guardar($userNuevo);
      redirect("login.php");
    }
  }
}*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Register ::</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/registerylogin.css">
</head>
<body>
    <div>
        <div class="logo">
              <a href="index.php">
                <img src="img/logo.svg" alt="">
              </a>  
            </div>
        <section class="section1">
            <article class="article1">
            <h1>Crear Cuenta</h1> <hr>
            <form method="POST" action="">
                    <div class="inputs">
                            <label for="nombre">Nombre:</label> <br>
                            <input name="nombre" type="text" id="nombre" value="<?= (isset($errores["nombre"]))? "" : persistir("nombre"); ?>" placeholder="Ingrese su nombre ..." required  > <br>
                            <span class="errores"> <?= isset($errores["nombre"])?$errores["nombre"]:null; ?> </span>
                    </div>
                    <div class="inputs">
                            <label for="nombre">Apellido:</label> <br>
                            <input name="apellido" type="text" id="apellido" value="<?= (isset($errores["apellido"]))? "" : persistir("apellido"); ?>" placeholder="Ingrese su apellido ..." required  > <br>
                            <span class="errores"> <?= isset($errores["apellido"])?$errores["apellido"]:null; ?> </span>
                    </div>
                    <div class="inputs">
                      <label for="email">Email:</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=(isset($errores["email"]))? "" : persistir("email");?>" placeholder="Ingrese email ..."required > <br>
                      <span class="errores"> <?= isset($errores["email"])?$errores["email"]:null; ?> </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Contraseña:</label> <!--NAME="password"--> <br>
                      <input name="pass" type="password" id="exampleInputPassword1" placeholder="Contraseña" required >  <br>
                      <span class="errores"> <?= isset($errores["pass"])?$errores["pass"]:null; ?> </span>
                      <small id="olvidecontraseña" class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Confirmar contraseña:</label> <br> <!--NAME="repassword"-->
                            <input name="repass" type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirme la contraseña"required > <br>
                            <span class="errores"> <?= isset($errores["repass"])?$errores["repass"]:null; ?> </span>                        
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <label class="cuenta" ><a href="login.php">Ya tenes cuenta?</a></label>
                    <hr class="opt">
                  </form>
            </article>
        </section>
    </div>
</body>
</html>
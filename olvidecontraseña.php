<?php
  include_once("autoload.php");
   if ($_POST) {
      $user= new Usuario($_POST["email"],null,null.null);
      $errores=$validar->validarOlvidarPass($user,$_POST["pass"],$_POST["repass"]);
      if (count($errores)==0) {
        $newpass=$_POST["pass"];
        $usuario= Query::buscarEmail($user->getEmail(),$pdo,'Users');
        if ($usuario==null) {
          $errores["email"]="Usuario Invalido";
        }else {
          Query::cambioPass($user->getEmail(),$newpass,$pdo,'Users');
          redirect("contrarecuperada.php");
        }
      }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Recuperar Contraseña::</title>
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
            <h1>Olvidaste la contraseña?</h1> <hr>
            <form method="POST" action="">
                    <div class="inputs">
                      <label for="email">Email</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email..." required > <br>
                      <span class="errores"> <?= isset($errores["email"])?$errores["email"]:null; ?> </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Nueva contraseña</label> <!--NAME="password"--> <br>
                      <input name="pass" type="password" id="exampleInputPassword1" placeholder="Contraseña"required > <br>
                      <span class="errores"> <?= isset($errores["pass"])?$errores["pass"]:null; ?> </span>
                      <small class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Confirmar nueva contraseña</label> <br> <!--NAME="repassword"-->
                            <input name="repass" type="password" id="exampleInputPassword1" placeholder=" Confirme la nueva contraseña" required> <br>
                            <span class="errores"> <?= isset($errores["repass"])?$errores["repass"]:null; ?> </span>                     
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <hr class="opt">
                  </form>
            </article>
        </section>
    </div>
</body>
</html>
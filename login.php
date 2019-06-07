<?php
  include_once("autoload.php");
  if ($_POST){
    $user=new Usuario($_POST["email"],$_POST["pass"],null,null);
    $errores=$validar->validarLogin($user);
    $pass=$user->getPassword();
    if(isset($_POST["remember"])){
      $remember=$_POST["remember"];
    }else{null;}
    if(count($errores)==0){
      $usuario=Query::buscarEmail($user->getEmail(),$pdo,'Users');
      if ($usuario==null) {
        $errores["email"]="primero debe registrarse";
      }else{
        if(password_verify($pass,$usuario['password'])==false){
          $errores["pass"]="Usuario o contraseña Erroneas";
        }else{
          $session->setUser($usuario);
          $session->setCookie($usuario,$remember);
          if($session->validarUser()){
            redirect("index.php");
          }else{
            redirect("registro.php");
          }
        }
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
    <title>::Login::</title>
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
            <h1>Log In</h1> <hr>
            <form method="POST" action="">
                    <div class="inputs">
                      <label for="email">Email:</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email..." required > <br>
                      <span class="errores"> <?= isset($errores["email"])?$errores["email"]:null; ?> </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Contraseña:</label> <!--NAME="password"--> <br>
                      <input name="pass" type="password" id="exampleInputPassword1" placeholder="Contraseña"required > <br>
                      <span class="errores"> <?= isset($errores["pass"])?$errores["pass"]:null; ?> </span> 
                      <small class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small> <br>
                      <small id="olvidecontraseña" class="olvidepass"><a href="olvidecontraseña.php">Olvidaste tu contraseña?</a> </small>
                    </div> <br>
                    <div class="recordar"> <!--NAME="remember"-->
                      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Recordame!</label>
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <hr class="opt1">
                    <label class="cuenta" ><a href="registro.php">Sos nuevo en la pagina?</a></label>
                    <hr class="opt">
                  </form>
            </article>
        </section>
    </div>
</body>
</html>
<?php 
 include_once("autoload.php");
if ($_POST) {
    if (isset($_POST["user"])) {
        redirect("adminUsers.php");
    }
    if (isset($_POST["products"])) {
        redirect("adminProducts.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::ADMINISTRAR::</title>
    <link rel="stylesheet" href="css/adm.css">
</head>
<body>
    <div class="containerAdm">
        <section class="sAd">
            <article class="aAd">
                <h1>ADMINISTRAR</h1>
                <br>
                <form action="" method="POST">
                    <button type="submit" name="user" class="btn">ADMINISTRAR USUARIOS</button>
                    <br>
                    <button type="submit" name="products" class="btn">ADMINISTRAR PRODUCTOS</button>
                </form>
            </article>
        </section>
    
    </div>
</body>
</html>
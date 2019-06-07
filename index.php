<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/navBar.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <title>:: Black Eye Gaming ::</title>
</head>
<body>
    <!--<div class="sidebar">
        <h2>Slide de prueba</h2>
        <ul>
            <li><a>Componentes</a></li>
            <li><a>Accesorios</a></li>
        </ul>
    </div>
    <div class="container">        
        <img src="img/Hamburger_icon.svg.png" alt="" class="menu-bar">
    </div>
    <script src="js/abrir.js"></script>-->

    <?php
        include_once("navBar.php");

        ?>

 <div class="slideshow">
    <ul class="slider">
        <li>
            <img src="img/product-1.jpg" alt="">
            <div class="hover">
                
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
        <li>
            <img src="img/product-2.jpg" alt="">
            <div class="hover">
                <section class="bg-skew"></section>
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
        <li>
            <img src="img/product-3.jpg" alt="">
            <div class="hover">
                <section class="bg-skew"></section>
                <section class="caption">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, beatae?</p>
                </section>
            </div>
        </li>
    </ul>
 </div>
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="__slider">
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="1 slide"></<img>
                      <div class="description">
                          <p >Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$40</span>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="2 slide"></<img>
                      <div class="description">
                          <p >Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$40</span>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer2.jpg" alt="3 slide"></<img>
                      <div class="description">
                          <p >Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$40</span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="__slider">
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="4 slide"></<img>
                      <div class="description">
                          <p>Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$30</span>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="5 slide"></<img>
                      <div class="description">
                          <p >Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$25</span>
                    </div>
                    <div class="__product">
                      <img class="" src="img/razer3.jpg" alt="6 slide"></<img>
                      <div class="description">
                          <p >Lorem ipsum dolor sit amet consectetur.</p>
                          <span>$20</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 <script src="js/main.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
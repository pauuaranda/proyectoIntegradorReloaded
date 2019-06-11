 
<?php include_once("autoload.php");
?>
<!-- /*----------------------------Mobile First NavBar-------------------------------*/  -->
<link rel="stylesheet" href="css/navBar.css">
<nav>
<div class="container_navBar">
        <div Class ="botonLineas">
        <div class ="lineIcon"></div>
        <div class ="lineIcon"></div>
        <div class ="lineIcon"></div>
        </div>
        <a class="botonNavBar" href="search.php" ><img class="botonNavBar"src="img/search.svg" alt="Search"></a>
        <div class="logo"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
        <a class="botonNavBar" href="carrito.php" ><img class="botonNavBar"src="img/carrito.svg" alt="Shopping_Cart"></a>
        <a class="botonNavBar" href="login.php" ><img class="botonNavBar"src="img/profile2.svg" alt="Profile_icon"></a>
        <?php 
        if($_SESSION){     
            if($_SESSION["perfil"]=="97"){
              echo"  <a  class='botonNavBar' href='administrar.php'><img src='img/admin.svg' alt='admin_icon'> </a>";
            }
        } ?>
        </div>
<div class="container_NavBarVertical">
        <div class="logo_Vertical"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
        <div class="container_verticalIcons .row">
            <div class="shop_Icon">
            <a  class="nav_Icons" href="shop.php"><img src="img/shop_icon.svg" alt="shop_icon"> </a>
            </div> 
            <div class="cart_Icon">
            <a  class="nav_Icons" href="cart.php"><img src="img/carrito.svg" alt="cart_icon"> </a>
            </div>
            <div class="search_Icon">
            <a  class="nav_Icons" href="searchResult.php"><img src="img/search.svg" alt="search_icon"> </a>
            </div>
        <?php
        if($_SESSION){
            echo "<div class='profile_Icon'>";
            echo "<a class='nav_Icons' href='login.php'><img src='" . $_SESSION['avatar'] . "' alt=''> </a>";
            echo "<a  class='__logout' href='logout.php'>Log out</a>";
        }else{
            echo" <div class='profile_Icon'>";
            echo" <a  class='nav_Icons' href='login.php'><img src='img/profile2.svg' alt='profile_icon'> </a>";
           echo" </div>";
        }
        ?>
        <?php 
        if($_SESSION){     
            if($_SESSION["perfil"]=="97"){
            echo"<div class='admin_Icon'>";
              echo"  <a  class='nav_Icons' href='administrar.php'><img src='img/admin.svg' alt='admin_icon'> </a>";
            echo"</div>";
            }
        } ?>
        <div class="help_Icon">
            <a  class="nav_Icons" href="faqs.php"><img src="img/help.svg" alt="help_icon"> </a>
        </div>
        </div>
</div>
</nav>
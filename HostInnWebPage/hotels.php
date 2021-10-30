

<!DOCTYPE html>
<html lang="en">
<?php
require_once "Db_class.php";

$db = new Db;

$db->query("SELECT Nombre FROM hotel");
$result = $db->results();
?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="css/style-hotels.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <!--
        <nav>
            <section class="container nav">
                <div class="logo">
                    <img src="img/HostInnLogo.png" alt="">
                </div>
                <div class="links-header">
                    <a href="index.html">Inicio</a>
                    <a href="hotels.html">Hoteles</a>
                    <a href="aboutUs.html">Nosotros</a>
                    <a href="login.html">Iniciar sesión</a>
                </div>
            </section>
        </nav>
-->
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/hotel1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Jaco</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam?</p>
                <a href="#">Reservar</a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/hotel2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php var_dump($result); ?></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, at.</p>
                <a href="#">Reservar</a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/hotel3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Santa Ana</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dolore.</p>
                <a href="#">Reservar</a>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/658425fc76.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
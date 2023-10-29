<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eTREVA</title>
  <?php 

  /*  require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();*/
  ?>
</head>
<style>/* body */
body {
	margin: 0;
	padding: 0;
	color: #818da9;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.5em; 
	background-color: #161D20;
	background-position: top;
	background-repeat: repeat-x;

  
}</style>
<body>
  <div class="slider" style="width: 80%; margin: auto;">
    <ul class="slides">
      <li>
        <img src="./static/images/carousel_1.gif"> 
        <div class="caption center-align">
        <h3 class="bold page-title">Disfruta</h3>
        <h5 class="bold page-title">Lo mejor de la comida nacional e internacional</h5>
        </div>
      </li>
      <li>
        <img src="./static/images/category_3.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">Aprende, Descrubre, Explora</h3>
          <h5 class="bold page-title">A donde ir y que hacer</h5>
        </div>
      </li>
      <li>
        <img src="static/images/Banner-Rebate-1.jfif"> 
        <div class="caption center-align">
          <h3 class="bold page-title">Vida Nocturna</h3>
          <h5 class="bold page-title">Diversión, comida y fista</h5>
        </div>


      </li>
      <li>
        <img src="./static/images/carousel_3.jpg"> 
        <div class="caption center-align">
          <h3 class="bold green-text page-title">Descubre fuera del Centro</h3>
        </div>
      </li>
      <li>
        <img src="./static/images/carousel_4.gif"> 
        <div class="caption center-align">
          <h3 class="bold page-title">Plaza Sanfransico</h3>
          <h5 class="bold page-title">Revive la historia</h5>
        </div>
      </li>
    </ul>
  </div>
  
  <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="row" style="margin-bottom: -20px">
        <h4 class="underline white-text bold center">Categorias</h4>
      </div>
      <div class="row hoverable">
        <div class="col hoverable">
          <a href="product_catalogue.php?category=0" class="hoverable">
            <div class="selectable-card hoverable" style="width: 300px; margin: 50px;">
                <img class="hoverable" src="static/images/category_1.gif"/>
              <h5 class="white-text center bold hoverable">Gatronmia</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=1">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold" >Pubs - Bares</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Museos - Historia</h5>
            </div>
          </a>
        </div>


        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Aventura</h5>
            </div>
          </a>
        </div>

        
        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Diversión</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Plazas y Lugares de Interes</h5>
            </div>
          </a>
        </div>

        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Tiendas Artesanales</h5>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="product_catalogue.php?category=2">
            <div class="selectable-card" style="width: 300px; margin: 50px;">
                <img src="./static/images/category_3.jpg"/>
              <h5 class="white-text center bold">Pasarlo en Familia o con algun acompañante</h5>
            </div>
          </a>

      </div>
    </div>
  </div>

  <div class="section" style="margin-top: 100px;">
    <div class="wide-container">
      <h3 class="white-text center">Recomendaciones segun nuetra IA para ustedes</h3>
      <h5 class="white-text center">
        Nosotros <b class="orange-text">Etreva- Travel</b>, Creamos un sistema de recomendaciones de alternativas turisticas con toda nuestra experiencia.
      </h5>
    </div>
  </div>

  <div class="grid" style="margin-top: 10px; margin-bottom: 100px">
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">10</h1>
      <h5 class="white-text center">Años de Experiencia</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">100</h1>
      <h5 class="white-text center">Alternativas Turisticas</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">8</h1>
      <h5 class="white-text center">Categorias</h5>
    </div>
    <div class="grid">
      <h1 class="count red-text text-darken-4 bold center">100</h1>
      <h5 class="white-text center">% Satisfacion garantizada</h5>
    </div>
  </div>

  <h3 class="white-text center">Descubre La Paz a tu manera</h3>
  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="margin-bottom: 100px">
    <img src="static/images/ice_pc.png" style="cursor:pointer; display:block; margin: 0 auto; " />
  </div>
  <div style="display:none">
    <video style="display:block; margin: 0 auto;" class="responsive-video" width="1280" height="720" autoplay="autoplay" controls muted>
      <source src="static/LaPaz.mp4" type="video/mp4">
    </video>
  </div>

  </div>
  </div>

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-dcc4934e-3eb0-4e18-98af-67fd2f034df1"></div>

  <?php require "footer.php"; ?>
</body>

<script>
  $(document).ready(function(){
    // carousel autoswipe
    $('.slider').slider({full_width: true});

    // counter
    $('.count').each(function () 
    {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) { $(this).text(Math.ceil(now)); }
      });
    });
  });
</script>
</html>
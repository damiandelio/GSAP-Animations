<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animaciones</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header id="header" class="navbar bg-dark">
      <div class="container h-100">
        <div class="row h-100 w-100">
          <div class="col h-100 d-flex align-items-center">
            <div id="miniatura"></div>
          </div>
        </div>
      </div>
    </header>
    <main class="container bg-white shadow-sm">
      <div class="row">
        <div id="abc" class="col d-flex justify-content-center align-items-center">
          <div id="circulo-abc"></div>
          <div id="circulo-abc-2"></div>
          <img id="dl" src="./img/damian-logo.svg" alt="damian logo">
        </div>
      </div>
      <div class="row">
        <div class="col m-1 m-sm-3 text-center d-flex justify-content-center">
          <div id="p" style="margin: 8rem 0 5rem 0; max-width: 50rem;">
            <p>Esta página web está desarrollada con GSAP. Una librería JavaScript que permite realizar animaciones complejas que se renderizan a través de la GPU gracias a la propiedad transform 3D de CSS, obteniendo así un mejor rendimiento.</p>
            <p>Además utiliza PHP para detectar si se ingresa desde un dispositivo mobile y cargar distintos scripts de animaciones.</p>
            <p>El layout fue creado con Bootstrap 4.<p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
      </div>
      <div class="row justify-content-center">
        <div id="div-01" class="col-7"></div>
      </div>
    </main>
    <footer class="container bg-dark d-flex align-items-center justify-content-center" style="height: 25rem">
      <div class="row">
        <div class="col text-center text-muted">
          <span>On <a href="https://github.com/damiandelio/GSAP-Animations" class="text-muted footer-link">GitHub</a> • </span>
          <span>
            Developed in:<br />
            Chrome V.68.0.3440.75<br />
            Firefox V.61.0.1<br />
          </span>
        </div>
      </div>
    </footer>

    <!-- bootstrap js -->
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>


    <!-- Funcion que detecta si es mobile o desktop para cargar las animaciones correctas -->
    <?php
      require_once ('functions/isMobile.php');

      if(isMobile()){
      // Carga las animaciones js-mobile.js
      echo ('<script src="./js/js-mobile.js"></script>');
      } else {
        // Carga las animaciones para desktop
        echo ('<script src="./js/js.js"></script>');
      }
    ?>

  </body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Love Monitor c:</title>
  <meta name="description" content="Hola! :D Mediante este pequeño monitor podremos llevar un registro diario de algunos puntos que pueden ser pilares en una relación de pareja. Es importante recordar que se debe ingresar los datos desde el amor y de manera honesta (no desde cualquier sentimiento negativo), pues estos datos nos servirán posteriormente para analizar si la relación se mantiene estable y se ha logrado un avance o si está decayendo. La finalidad de esta pequeña bitácora digital es brindarle a la relación el cuidado del amor que se merece y seguir creciendo como pareja. Suerte ^^">

  <meta name="theme-color" content="#ffe3e8b3">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <link rel="shortcut icon" type="image/png" href="<?= media(); ?>/images/LoveMonitor.png">
  <link rel="apple-touch-icon" href="<?= media(); ?>/images/LoveMonitor.png">
  <link rel="apple-touch-startup-image" href="<?= media(); ?>/images/LoveMonitor.png">
  <link rel="manifest" href="./manifest.json">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body>
  <header class="Header">
    <h1 data-aos="fade-up" data-aos-duration="1000">Welcome to your Love Monitor c:</h1><br>
    <img src="<?= media(); ?>/images/LoveMonitor.png" alt="LoveMonitor" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
      Hola! :D Mediante este pequeño monitor podremos llevar un registro diario de algunos puntos que pueden ser pilares en una relación de pareja. Es importante recordar que se debe ingresar los datos desde el amor y de manera honesta (no desde cualquier sentimiento negativo), pues estos datos nos servirán posteriormente para analizar si la relación se mantiene estable y se ha logrado un avance o si está decayendo. La finalidad de esta pequeña bitácora digital es brindarle a la relación el cuidado del amor que se merece y seguir creciendo como pareja. Suerte ^^
    </p>
    <center>
      <q id="btnLogin"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
        <span>Iniciar</span>
        <div class="liquid"></div>
      </q>
    </center>
    <nav data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
      <a href="https://www.youtube.com/" target="_blank" title="YouTube">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://facebook.com/" target="_blank" title="Facebook">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/" target="_blank" title="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
    </nav>
  </header>

  <!-- <main class="Main">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zPvJzKMgUoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </main> -->

  <script src="./script.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script type="text/javascript">
    document.getElementById("btnLogin").onclick = function () {
        location.href = "<?php echo BASE_URL();?>/login";
    };
  </script>

</body>

</html>
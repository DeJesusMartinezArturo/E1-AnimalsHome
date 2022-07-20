<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Animal's Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("./layouts/header.php");
  ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br><br>
        <h1 class="header white-text text-lighten-2 floota">Animal's Home</h1>
        <hr>
        <div class="row">
          <h5 class="header col s12 light avocadoCreamy">Veterinaria</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./assets/img/parallax.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <h2 class="center floota">Nuestro Trabajo</h2>
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">health_and_safety</i></h2>
            <h5 class="center">Cuidado</h5>
            <p class="light">Buscamos que usted tenga la seguridad sobre su mascota y que reciba la mejor experiencia posible.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">inventory</i></h2>
            <h5 class="center">Los mejores productos</h5>
            <p class="light">Nuestros servicios son tratados con los productos mejor valorados y de las mejores empresas en el mercado.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">emoji_objects</i></h2>
            <h5 class="center">Accesibilidad</h5>

            <p class="light">Realice sus citas desde la comodidad de su computadora y a la hora que usted desee.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <h2 class="center floota">Ubicación</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30105.88023760115!2d-99.56636791025969!3d19.4022485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20bdcca9c72a7%3A0x98daa417ea983a96!2sClinica%20Veterinaria%20Animal%C2%B4s%20Home!5e0!3m2!1ses!2smx!4v1657844759298!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <div class="black white-text center">
    <div class="container">
      <div class="section">
        <!-- Imagen Circular -->
        <h2 class="floota">Animal's Home</h2>
        <img class="circle" src="./assets/img/AnimalsHome.jpg" width="400px">
        <p>Es una empresa dedicada al cuidado de las mascotas, los servicios que ofrecemos incluyen consultas generales y cuidados estéticos. Nuestro grupo de trabajo comparte valores y principios éticos de respeto, responsabilidad y compromiso de nuestros clientes, entregado calidad y satisfacción de nuestros servicios.</p>
      </div>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="./assets/js/materialize.js"></script>
  <script src="./assets/js/init.js"></script>

</body>
<?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("./layouts/footer.php");
  ?>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Servicios</title>
  <link href="./assets/css/s.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <meta charset="utf-8">
  <link href="../assets/css/styles.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../assets/css/styles.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<?php
//Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    include("../layouts/header.php");
    ?>

<body class="seccion">

  <div class="contenedor-citas">
    <h1>Reservación</h1>
    <p >Elige tus servicios a continuación</p>
  </div>

  <div>
    <nav class="tabs">
      <button type="button" data-paso="1">Servicios</button>
      <button type="button" data-paso="2">Información Cita</button>
      <button type="button" data-paso="3">Resumen</button>
    </nav>

    <h5>Seleccione uno de los servicios a continuación...</h5>
    <h2>Medico</h2>
    <h5>Servicios</h5>

    <div class="servicios">
      <section class="contenedor_servicios">
        <h3>Desparasitacion</h3>
        <p>COSTO: $ pesos</p>
      </section>

      <section class="contenedor_servicios">
        <h3>Consulta Medica</h3>
        <p>COSTO: $ pesos</p>
      </section>

      <section class="contenedor_servicios">
        <h3>Vacunas</h3>
        <p>COSTO: $ pesos</p>
      </section>
    </div>
    <h2>Estética</h2>
    <h5>Paquetes</h5>
    <div class="servicios">
      <section class="contenedor_servicios">
        <h3>Fancy</h3>
        <p>baño</p>
        <p>COSTO: $ pesos</p>
      </section>

      <section class="contenedor_servicios">
        <h3>Príncipe Princesa</h3>
        <p>- Baño</p>
        <p>COSTO: $ pesos</p>
      </section>

      <section class="contenedor_servicios">
        <h3>Rey</h3>
        <p>- Baño con masaje
        </p>
        <p>COSTO: $ pesos</p>
      </section>
    </div>

    <div class="navegacion">
      <button><a href="../components/login.php">Volver &raquo; </a></button>
      <button><a href="../components/informacion.php">Siguiente &raquo; </a></button>
    </div>

  </div>

</body>
<?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("../layouts/footer.php");
  ?>

</html>
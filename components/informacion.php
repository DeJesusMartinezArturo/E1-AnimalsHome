<!DOCTYPE html>
<html lang="es">

<head>
  <title>Informacion de la Cita</title>
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
    <h1 class="nombre-pagina">Reservacion</h1>
    <p class="descripcion-pagina">Información acerca de la reservación</p>

  </div>

  
  <div>
  <nav class="tabs ">
        <button type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div class="navegacion">
    <button><a href="../components/servicios.php">Volver &raquo; </a></button>
    <button><a href="../components/resumen.php">resumen &raquo; </a></button>
    </div>

  </div>

</body>
<?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("../layouts/footer.php");
  ?>
</html>
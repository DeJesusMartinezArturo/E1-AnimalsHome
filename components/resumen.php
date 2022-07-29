<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Resumen</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("../layouts/header_s.php");
  ?>
</head>

<body class="seccion">

  <div">
    <h1>Reservación</h1>
    <p>Información acerca de la reservación</p>
    </div>

    <!-- Navegacin-->
    <div class="servicios container px-lg-  pt-4 btn-group" role="group" aria-label="">
      <input type="checkbox" class="btn-check" id="btncheck1">
      <a class="boton-ser btn-outline-danger" for="btncheck1" href="reservacion.php">Servicios</a></span>

      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
      <a class="boton-ser btn-outline-danger" for="btncheck2" href="informacion.php">Información Cita</a></span>

      <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
      <a class="boton btn-outline-danger" for="btncheck3" href="resumen.php">Resumen</a></span>

    </div>

    <div class="container card-body w-75 mt-5 rounded shadow">


      <section>
        <form class="formulario-resumen">
          <label for="">Paquete</label>
          <input type="text">
          <label for="">Total</label>
          <input type="text">
        </form>

      </section>
      <h2 class="seccion-resumen">Resumen de la Cita</h2>
      <form class="formulario-resumen">
        <section>
          <label for="nombre">Nombre</label>
          <input id="nombre" type="text" />

          <label for="fecha">Fecha</label>
          <input id="fecha" type="date" />

          <label for="hora">Hora</label>
          <input id="hora" type="time" />
        </section>

        <div class="d-grid">
          <a class="btn btn-primary" href="../index.php"> Agendar </a>

        </div>

    </div>

    <div class=" servicios container px-lg-6  pt-4 btn-group" role="group">
      <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
      <a class="boton btn-outline-danger" for="btncheck1" href="reservacion.php">Atrás</a></span>

      <input type="checkbox"><label class=""></label>

    </div>

    <!-- Footer-->
    <footer class="pt-5">
      <?php
      include '../layouts/footer.php';
      ?>
    </footer>

</body>
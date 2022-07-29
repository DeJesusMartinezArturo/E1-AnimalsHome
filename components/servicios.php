<head>
  <title>Servicios</title>
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <?php
//Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    include("../layouts/header.php");
?>

</head>

<body>

  <div class="center">
    <h2>Medico</h2>
    <h5>Servicios</h5>
  </div>


  <div class="row text-center">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title ">Desparasitacion</h5>
          <p class="card-text">COSTO: $ pesos</p>
          <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Consulta Medica</h5>
          <p class="card-text">COSTO: $ pesos</p>
          <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Vacunas</h5>
          <p class="card-text">COSTO: $ pesos</p>
          <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="center">
    <h2>Promociones</h2>
    <h5>--- Destacados ---</h5>
  </div>

  <div class="servicios">
    <div class="card text-center col-sm-12">
      <div class="card-header">
        Nuevo
      </div>
      <img class="card-img-top" src="../assets/img/promo1.png" alt="Card image cap">
      <div class="card-body ">
        <p class="card-text">Croquetas para perros adultos de razas grandes, con ingredientes seleccionados para
          aportar una alimentación completa y equilibrada para minimizar los efectos del envejecimiento.</p>
      </div>
    </div>
    <div class="card text-center col-sm-12">
      <div class="card-header">
        Nuevo
      </div>
      <img class="card-img-top" src="../assets/img/promo3.png" alt="Card image cap">
      <div class="card-body ">
        <p class="card-text">Nuevas bolsas de puerta limpias + 360 bolsas higiénicas para caca de perros</p>
      </div>
    </div>
    <div class="card text-center col-sm-12">
      <div class="card-header bg-warning">
        ¡Super Precio!
      </div>
      <img class="card-img-top" src="../assets/img/promo2.png" alt="Card image cap">
      <div class="card-body ">
        <p class="card-text">El transportín Robustus de Outech es un artículo con doble cerradura para llevar con
          total seguridad a tu mascota en el coche. </p>
      </div>
    </div>
  </div>


  <div class="text-center">
    <div class="seccion">
      <h2>Estética</h2>
      <h5>Paquetes</h5>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header">
            <h4>Fancy</h4>
          </div>
          <div class="card-body">
            <p class="card-text">- Baño <br>- Secado rápido <br>- Corte Uñas <br><br>COSTO: $pesos</p>
            <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>



      <div class="col-sm-4">
        <div class="card">
          <div class="card-header">
            <h4>Principe/Princesa</h4>
          </div>
          <div class="card-body">
            <p class="card-text">- Baño <br>- Secado rápido <br>- Corte Uñas <br>- Corte de pelo <br>- Arreglo
              estetico
              <br><br>COSTO: $pesos
            </p>
            <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-header">
            <h4>Rey</h4>
          </div>
          <div class="card-body">
            <p class="card-text">- Baño <br>- Secado rápido <br>- Corte Uñas <br>- Corte de pelo <br>- Arreglo
              estetico
              <br>-Limpieza de oidos <br>- Lavado de dientes <br>- Adorno y perfume <br><br>COSTO: $pesos
            </p>
            <a href="./reservacion.php" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>


    </div>




  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  </div>

</body>
<?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("../layouts/footer.php");
  ?>
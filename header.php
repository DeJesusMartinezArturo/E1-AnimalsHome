<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="navbar-fixed">
  <nav class="blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="./index.php" class="brand-logo">Animal's Home</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./index.php">INICIO</a></li>
        <li><a href="./citas.php">SERVICIOS</a></li>
        <li><a href="./login.php"><i class="material-icons medium">account_circle</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./citas.php">Servicios</a></li>
        <li><a href="./login.php">Cuenta</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
    </div>
  </nav>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>
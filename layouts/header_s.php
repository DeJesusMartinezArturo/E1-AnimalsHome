<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

<div class="navbar-fixed">
    <!-- Dropdown Structure -->
    <ul id="id_drop" class="dropdown-content">
    <li><a href="../components/panel-perfil-uno.php"><i class="material-icons">account_circle</i>Mi cuenta</a></li>
    <li><a href="../components/login.php"><i class="material-icons">logout</i>Log-out</a></li>
  </ul>
  <nav class="blue darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="../index.php" class="brand-logo dominiko">Animal's Home</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
        <i class="material-icons white-text">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="../components/Citas_u.php">TUS CITAS</a></li>
        <li><a href="../components/reservacion.php">AGENDAR</a></li> 
        <!-- Dropdown Trigger -->
        <li><a href="#" class="dropdown-trigger" data-target="id_drop">USUARIO<i class="material-icons right">account_circle</i></a></li>
      </ul>
    </div>
  </nav>
</div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.php"><i class="material-icons">home</i> Inicio</a></li>
    <li><a href="../components/panel-usuario.php"><i class="material-icons">account_circle</i>Mi cuenta</a></li>
    <li><a href="../components/reservacion.php"><i class="material-icons">star</i> Agendar</a></li>
    <li><a href="../components/Citas_u.php"><i class="material-icons">calendar_month</i> Tus citas</a></li>
    <li class="divider"></li>
    <li><a href="../components/login.php"><i class="material-icons">logout</i>Salir</a></li>
  </ul>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../assets/js/materialize.js"></script>
<script src="../assets/js/init.js"></script>
<script>
      $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
        { hover: false }dropdown()
  });
  </script>